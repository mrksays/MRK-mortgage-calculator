/* RS Mortgage Calculator v2.1 — with comma formatting fix */
document.addEventListener("DOMContentLoaded", function () {

    var cfg = (typeof mc_config !== "undefined") ? mc_config : {};

    var currency    = cfg.currency     || "£";
    var defaultDebt = cfg.default_debt || "250000";
    var defaultTerm = cfg.default_term || "25";
    var defaultRate = cfg.default_rate || "4.5";

    /* ── Elements ── */
    var debtInput  = document.getElementById("mc-debt");
    var termInput  = document.getElementById("mc-term");
    var rateInput  = document.getElementById("mc-rate");

    var debtRange  = document.getElementById("mc-debtRange");
    var termRange  = document.getElementById("mc-termRange");
    var rateRange  = document.getElementById("mc-rateRange");

    var calculateBtn        = document.getElementById("mc-calculate");
    var monthlyInterestEl   = document.getElementById("mc-monthlyInterest");
    var totalInterestEl     = document.getElementById("mc-totalInterest");
    var monthlyRepaymentEl  = document.getElementById("mc-monthlyRepayment");
    var totalRepaymentEl    = document.getElementById("mc-totalRepayment");

    if (!debtInput || !calculateBtn) return;

    /* ── Helpers ── */
    function addCommas(x) {
        if (!x) return "";
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    function removeCommas(x) {
        return (x || "").toString().replace(/,/g, "");
    }

    function formatNumber(num) {
        return num.toLocaleString("en-GB", {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });
    }

    function fmt(num) {
        return currency + formatNumber(num);
    }

    /* ── Apply range attributes ── */
    if (cfg.debt_min)  debtRange.min  = cfg.debt_min;
    if (cfg.debt_max)  debtRange.max  = cfg.debt_max;
    if (cfg.debt_step) debtRange.step = cfg.debt_step;

    if (cfg.term_min)  termRange.min  = cfg.term_min;
    if (cfg.term_max)  termRange.max  = cfg.term_max;
    if (cfg.term_step) termRange.step = cfg.term_step;

    if (cfg.rate_min)  rateRange.min  = cfg.rate_min;
    if (cfg.rate_max)  rateRange.max  = cfg.rate_max;
    if (cfg.rate_step) rateRange.step = cfg.rate_step;

    /* ── Default values ── */
    debtInput.value = addCommas(defaultDebt);
    termInput.value = defaultTerm;
    rateInput.value = defaultRate;

    debtRange.value = defaultDebt;
    termRange.value = defaultTerm;
    rateRange.value = defaultRate;

    /* ── Sync: Range → Input ── */
    debtRange.oninput = function () {
        debtInput.value = addCommas(this.value);
    };

    termRange.oninput = function () {
        termInput.value = this.value;
    };

    rateRange.oninput = function () {
        rateInput.value = this.value;
    };

    /* ── Sync: Input → Range ── */
    debtInput.addEventListener("input", function () {
        let raw = removeCommas(this.value);

        if (!isNaN(raw) && raw !== "") {
            this.value = addCommas(raw);
            debtRange.value = raw;
        }
    });

    termInput.oninput = function () {
        termRange.value = this.value;
    };

    rateInput.oninput = function () {
        rateRange.value = this.value;
    };

    /* ── Calculate ── */
    calculateBtn.addEventListener("click", calculateMortgage);

    function calculateMortgage() {

        var debt  = parseFloat(removeCommas(debtInput.value)) || 0;
        var term  = parseFloat(termInput.value) || 25;
        var rate  = parseFloat(rateInput.value) || 0;

        var monthlyRate = rate / 100 / 12;
        var months      = term * 12;

        /* Interest only */
        var monthlyInterest = debt * monthlyRate;
        var totalInterest   = monthlyInterest * months;

        /* Repayment */
        var monthlyRepayment = 0;
        var totalRepayment   = 0;

        if (rate > 0) {
            monthlyRepayment =
                (debt * monthlyRate * Math.pow(1 + monthlyRate, months)) /
                (Math.pow(1 + monthlyRate, months) - 1);

            totalRepayment = monthlyRepayment * months;
        } else {
            monthlyRepayment = debt / months;
            totalRepayment   = debt;
        }

        monthlyInterestEl.innerText  = fmt(monthlyInterest);
        totalInterestEl.innerText    = fmt(totalInterest);
        monthlyRepaymentEl.innerText = fmt(monthlyRepayment);
        totalRepaymentEl.innerText   = fmt(totalRepayment);
    }

    /* ── Auto run on load ── */
    calculateMortgage();
});