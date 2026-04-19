<?php
/*
Plugin Name: MRK Mortgage Calculator
Description: Mortgage calculator with full WP Admin control — content, defaults, ranges, colors, typography, layout. Use shortcode [mortgage_calculator].
Version: 3.0
Author: Muhammad Rameez Khalid
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// ═══════════════════════════════════════════════════════
// 1. DEFAULT SETTINGS  (single source of truth)
// ═══════════════════════════════════════════════════════

function mc_default_settings() {
    return array(

        // ── Content ──────────────────────────────────
        'tag_text'              => 'MORTGAGE CALCULATOR',
        'heading_text'          => 'Plan your future with precision',
        'currency_symbol'       => '£',
        'btn_text'              => 'Calculate Mortgage',

        // ── Labels ───────────────────────────────────
        'label_debt'            => 'Mortgage Debt',
        'label_term'            => 'Mortgage Term (Years)',
        'label_rate'            => 'Interest Rate (%)',

        // ── Card Labels ───────────────────────────────
        'card1_title'           => 'MONTHLY PAYMENT (INTEREST ONLY)',
        'card1_sub'             => 'Your monthly interest-only commitment',
        'card2_title'           => 'TOTAL REPAYMENT (INTEREST ONLY)',
        'card2_sub'             => 'Sum of interest payments over full term',
        'card3_title'           => 'MONTHLY PAYMENT (REPAYMENT)',
        'card3_sub'             => 'Principal + Interest combined monthly',
        'card4_title'           => 'TOTAL REPAYMENT (REPAYMENT)',
        'card4_sub'             => 'Grand total paid back to the lender',

        // ── Defaults ─────────────────────────────────
        'default_debt'          => '250000',
        'default_term'          => '25',
        'default_rate'          => '4.5',

        // ── Ranges ───────────────────────────────────
        'debt_min'              => '50000',
        'debt_max'              => '1000000',
        'debt_step'             => '1000',
        'term_min'              => '5',
        'term_max'              => '40',
        'term_step'             => '1',
        'rate_min'              => '0',
        'rate_max'              => '10',
        'rate_step'             => '0.1',

        // ── Colors ───────────────────────────────────
        'color_bg'              => '#146356',
        'color_text'            => '#ffffff',
        'color_heading'         => '#ffffff',
        'color_tag_border'      => 'rgba(255,255,255,0.4)',
        'color_heading_line'    => '#ffffff',
        'color_label'           => '#ffffff',
        'color_input_bg'        => 'rgba(255,255,255,0.05)',
        'color_input_border'    => 'rgba(255,255,255,0.10)',
        'color_input_text'      => '#ffffff',
        'color_symbol'          => '#ffffff',
        'color_range_track'     => '#5e9182',
        'color_range_thumb'     => '#7ea9ff',
        'color_btn_bg'          => '#c7d8c9',
        'color_btn_text'        => '#146356',
        'color_btn_hover_bg'    => '#b0c9b2',
        'color_card_bg'         => 'rgba(255,255,255,0.03)',
        'color_card_title'      => '#ffffff',
        'color_card_sub'        => '#ffffff',
        'color_result'          => '#ffffff',

        // ── Typography: Global ────────────────────────
        'font_family'           => '"Work Sans", sans-serif',
        'google_font_url'       => 'https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap',

        // ── Typography: Tag / Badge ───────────────────
        'tag_font_family'       => '',
        'tag_font_size'         => '11',
        'tag_font_weight'       => '400',
        'tag_font_style'        => 'normal',
        'tag_letter_spacing'    => '1',
        'tag_text_transform'    => 'none',
        'tag_line_height'       => '1.4',

        // ── Typography: Heading h2 ────────────────────
        'heading_font_family'   => '',
        'heading_font_size'     => '48',
        'heading_font_weight'   => '300',
        'heading_font_style'    => 'normal',
        'heading_letter_spacing'=> '0',
        'heading_text_transform'=> 'none',
        'heading_line_height'   => '1.2',

        // ── Typography: Labels ────────────────────────
        'label_font_family'     => '',
        'label_font_size'       => '14',
        'label_font_weight'     => '400',
        'label_font_style'      => 'normal',
        'label_letter_spacing'  => '0',
        'label_text_transform'  => 'none',
        'label_line_height'     => '1.4',

        // ── Typography: Input ─────────────────────────
        'input_font_family'     => '',
        'input_font_size'       => '15',
        'input_font_weight'     => '400',
        'input_font_style'      => 'normal',
        'input_letter_spacing'  => '0',
        'input_line_height'     => '1.4',

        // ── Typography: Button ────────────────────────
        'btn_font_family'       => '',
        'btn_font_size'         => '15',
        'btn_font_weight'       => '500',
        'btn_font_style'        => 'normal',
        'btn_letter_spacing'    => '0',
        'btn_text_transform'    => 'none',
        'btn_line_height'       => '1.4',

        // ── Typography: Card Title ────────────────────
        'card_title_font_family'    => '',
        'card_title_font_size'      => '16',
        'card_title_font_weight'    => '400',
        'card_title_font_style'     => 'normal',
        'card_title_letter_spacing' => '0',
        'card_title_text_transform' => 'none',
        'card_title_line_height'    => '1.4',

        // ── Typography: Card Subtitle ─────────────────
        'card_sub_font_family'      => '',
        'card_sub_font_size'        => '14',
        'card_sub_font_weight'      => '400',
        'card_sub_font_style'       => 'normal',
        'card_sub_letter_spacing'   => '0',
        'card_sub_text_transform'   => 'none',
        'card_sub_line_height'      => '1.4',

        // ── Typography: Result Value (h3) ─────────────
        'result_font_family'        => '',
        'result_font_size'          => '30',
        'result_font_weight'        => '500',
        'result_font_style'         => 'normal',
        'result_letter_spacing'     => '0',
        'result_text_transform'     => 'none',
        'result_line_height'        => '1.2',

        // ── Layout ───────────────────────────────────
        'wrapper_max_width'     => '1400',
        'wrapper_padding'       => '60',
        'wrapper_border_radius' => '18',
        'box_shadow'            => '0 10px 30px rgba(0,0,0,0.15)',
        'gap_columns'           => '60',
        'gap_cards'             => '16',
        'field_margin_bottom'   => '28',
        'btn_border_radius'     => '25',
        'card_border_radius'    => '12',
        'card_padding'          => '18px 20px',
    );
}

// ═══════════════════════════════════════════════════════
// 2. REGISTER SETTINGS
// ═══════════════════════════════════════════════════════
function mc_register_settings() {
    register_setting( 'mc_settings_group', 'mc_settings', 'mc_sanitize_settings' );
}
add_action( 'admin_init', 'mc_register_settings' );

function mc_sanitize_settings( $input ) {
    $clean    = array();
    $defaults = mc_default_settings();
    foreach ( $defaults as $key => $default ) {
        // Use submitted value if present (even empty string), else keep default
        $clean[ $key ] = isset( $input[ $key ] ) ? sanitize_text_field( $input[ $key ] ) : $default;
    }
    return $clean;
}

// ═══════════════════════════════════════════════════════
// 3. GETTER  (never returns empty — always falls back to default)
// ═══════════════════════════════════════════════════════
function mc_get( $key ) {
    static $saved = null;
    if ( $saved === null ) $saved = get_option( 'mc_settings', array() );
    $defaults = mc_default_settings();
    if ( isset( $saved[ $key ] ) && $saved[ $key ] !== '' ) return $saved[ $key ];
    return isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
}

// Resolve per-element font-family: use element override if set, else global
function mc_font( $element_key ) {
    $override = mc_get( $element_key . '_font_family' );
    return $override ? $override : mc_get( 'font_family' );
}

// ═══════════════════════════════════════════════════════
// 4. ADMIN MENU
// ═══════════════════════════════════════════════════════
function mc_admin_menu() {
    add_options_page(
        'MRK Mortgage Calculator Settings',
        'MRK Mortgage Calc',
        'manage_options',
        'mrk-mortgage-calculator',
        'mc_settings_page'
    );
}
add_action( 'admin_menu', 'mc_admin_menu' );

// ═══════════════════════════════════════════════════════
// 5. SETTINGS PAGE
//    KEY FIX: ONE <form> that always includes ALL fields.
//    Tabs are purely visual (JS show/hide), never separate forms.
// ═══════════════════════════════════════════════════════
function mc_settings_page() {
    if ( ! current_user_can( 'manage_options' ) ) return;
    $s = function( $key ) { return esc_attr( mc_get( $key ) ); };
    $active = isset( $_GET['tab'] ) ? sanitize_key( $_GET['tab'] ) : 'content';
    $tabs = array(
        'content'  => '📝 Content',
        'defaults' => '🎛️ Defaults & Ranges',
        'colors'   => '🎨 Colors',
        'typo'     => '🔤 Typography',
        'layout'   => '📐 Layout',
    );
    ?>
    <div class="wrap">
        <h1 style="display:flex;align-items:center;gap:10px;">⚙️ MRK Mortgage Calculator <span style="font-size:13px;font-weight:400;color:#666;background:#f0f0f0;padding:3px 10px;border-radius:20px;">v3.0</span></h1>
        <p style="color:#555;">Shortcode: <code>[mortgage_calculator]</code> &nbsp;|&nbsp; All settings are saved together — switching tabs will never reset your other changes.</p>

        <?php if ( isset( $_GET['settings-updated'] ) ) : ?>
            <div class="notice notice-success is-dismissible"><p>✅ Settings saved successfully!</p></div>
        <?php endif; ?>

        <!-- TAB NAV (purely visual, JS-driven) -->
        <nav class="nav-tab-wrapper" id="mc-tab-nav" style="margin-bottom:0;">
            <?php foreach ( $tabs as $tab_key => $tab_label ) :
                $class = ( $active === $tab_key ) ? 'nav-tab nav-tab-active' : 'nav-tab';
                echo '<a href="#mc-tab-' . esc_attr($tab_key) . '" class="' . $class . '" data-tab="' . esc_attr($tab_key) . '">' . $tab_label . '</a>';
            endforeach; ?>
        </nav>

        <!-- SINGLE FORM — all fields always submitted together -->
        <form method="post" action="options.php">
            <?php settings_fields( 'mc_settings_group' ); ?>

            <?php /* ── CONTENT TAB ── */ ?>
            <div id="mc-tab-content" class="mc-tab-panel" <?php echo $active !== 'content' ? 'style="display:none"' : ''; ?>>
                <table class="form-table">
                    <?php mc_section_head('General Text'); ?>
                    <?php mc_row( 'Tag / Badge Text',  'tag_text',        $s ); ?>
                    <?php mc_row( 'Heading Text',       'heading_text',    $s ); ?>
                    <?php mc_row( 'Currency Symbol',    'currency_symbol', $s ); ?>
                    <?php mc_row( 'Button Text',        'btn_text',        $s ); ?>
                    <?php mc_section_head('Input Field Labels'); ?>
                    <?php mc_row( 'Debt Label', 'label_debt', $s ); ?>
                    <?php mc_row( 'Term Label', 'label_term', $s ); ?>
                    <?php mc_row( 'Rate Label', 'label_rate', $s ); ?>
                    <?php mc_section_head('Result Card Labels'); ?>
                    <?php mc_row( 'Card 1 — Title',    'card1_title', $s ); ?>
                    <?php mc_row( 'Card 1 — Subtitle', 'card1_sub',   $s ); ?>
                    <?php mc_row( 'Card 2 — Title',    'card2_title', $s ); ?>
                    <?php mc_row( 'Card 2 — Subtitle', 'card2_sub',   $s ); ?>
                    <?php mc_row( 'Card 3 — Title',    'card3_title', $s ); ?>
                    <?php mc_row( 'Card 3 — Subtitle', 'card3_sub',   $s ); ?>
                    <?php mc_row( 'Card 4 — Title',    'card4_title', $s ); ?>
                    <?php mc_row( 'Card 4 — Subtitle', 'card4_sub',   $s ); ?>
                </table>
            </div>

            <?php /* ── DEFAULTS & RANGES TAB ── */ ?>
            <div id="mc-tab-defaults" class="mc-tab-panel" <?php echo $active !== 'defaults' ? 'style="display:none"' : ''; ?>>
                <table class="form-table">
                    <?php mc_section_head('Default Values on Load'); ?>
                    <?php mc_row( 'Default Debt',         'default_debt', $s ); ?>
                    <?php mc_row( 'Default Term (years)', 'default_term', $s ); ?>
                    <?php mc_row( 'Default Rate (%)',     'default_rate', $s ); ?>
                    <?php mc_section_head('Debt Slider Range'); ?>
                    <?php mc_row( 'Min',  'debt_min',  $s ); ?>
                    <?php mc_row( 'Max',  'debt_max',  $s ); ?>
                    <?php mc_row( 'Step', 'debt_step', $s ); ?>
                    <?php mc_section_head('Term Slider Range'); ?>
                    <?php mc_row( 'Min',  'term_min',  $s ); ?>
                    <?php mc_row( 'Max',  'term_max',  $s ); ?>
                    <?php mc_row( 'Step', 'term_step', $s ); ?>
                    <?php mc_section_head('Rate Slider Range'); ?>
                    <?php mc_row( 'Min',  'rate_min',  $s ); ?>
                    <?php mc_row( 'Max',  'rate_max',  $s ); ?>
                    <?php mc_row( 'Step', 'rate_step', $s ); ?>
                </table>
            </div>

            <?php /* ── COLORS TAB ── */ ?>
            <div id="mc-tab-colors" class="mc-tab-panel" <?php echo $active !== 'colors' ? 'style="display:none"' : ''; ?>>
                <table class="form-table">
                    <?php mc_section_head('Wrapper'); ?>
                    <?php mc_color_row( 'Background',       'color_bg',           $s ); ?>
                    <?php mc_color_row( 'General Text',     'color_text',         $s ); ?>
                    <?php mc_section_head('Heading & Tag'); ?>
                    <?php mc_color_row( 'Heading Color',    'color_heading',      $s ); ?>
                    <?php mc_color_row( 'Heading Line',     'color_heading_line', $s ); ?>
                    <?php mc_row(       'Tag Border Color', 'color_tag_border',   $s ); ?>
                    <?php mc_section_head('Input Fields'); ?>
                    <?php mc_row(       'Input Background', 'color_input_bg',     $s ); ?>
                    <?php mc_row(       'Input Border',     'color_input_border', $s ); ?>
                    <?php mc_color_row( 'Input Text',       'color_input_text',   $s ); ?>
                    <?php mc_color_row( 'Symbol (£/%/Y)',   'color_symbol',       $s ); ?>
                    <?php mc_color_row( 'Field Label',      'color_label',        $s ); ?>
                    <?php mc_section_head('Slider'); ?>
                    <?php mc_color_row( 'Track Color',      'color_range_track',  $s ); ?>
                    <?php mc_color_row( 'Thumb Color',      'color_range_thumb',  $s ); ?>
                    <?php mc_section_head('Button'); ?>
                    <?php mc_color_row( 'Button Background',      'color_btn_bg',       $s ); ?>
                    <?php mc_color_row( 'Button Text',            'color_btn_text',     $s ); ?>
                    <?php mc_color_row( 'Button Hover Background','color_btn_hover_bg', $s ); ?>
                    <?php mc_section_head('Result Cards'); ?>
                    <?php mc_row(       'Card Background',  'color_card_bg',      $s ); ?>
                    <?php mc_color_row( 'Card Title',       'color_card_title',   $s ); ?>
                    <?php mc_color_row( 'Card Subtitle',    'color_card_sub',     $s ); ?>
                    <?php mc_color_row( 'Result Value',     'color_result',       $s ); ?>
                </table>
            </div>

            <?php /* ── TYPOGRAPHY TAB ── */ ?>
            <div id="mc-tab-typo" class="mc-tab-panel" <?php echo $active !== 'typo' ? 'style="display:none"' : ''; ?>>
                <table class="form-table">
                    <?php mc_section_head('Global Font (applies to all elements unless overridden below)'); ?>
                    <?php mc_row( 'Global Font Family',   'font_family',      $s ); ?>
                    <?php mc_row( 'Google Font Import URL <small style="font-weight:400">(leave blank if font already loaded by theme)</small>', 'google_font_url', $s ); ?>

                    <?php mc_typo_section( 'Tag / Badge',        'tag',        $s ); ?>
                    <?php mc_typo_section( 'Heading (h2)',        'heading',    $s ); ?>
                    <?php mc_typo_section( 'Field Labels',        'label',      $s ); ?>
                    <?php mc_typo_section( 'Input Fields',        'input',      $s ); ?>
                    <?php mc_typo_section( 'Button',              'btn',        $s ); ?>
                    <?php mc_typo_section( 'Card Title',          'card_title', $s ); ?>
                    <?php mc_typo_section( 'Card Subtitle',       'card_sub',   $s ); ?>
                    <?php mc_typo_section( 'Result Value (h3)',   'result',     $s ); ?>
                </table>
            </div>

            <?php /* ── LAYOUT TAB ── */ ?>
            <div id="mc-tab-layout" class="mc-tab-panel" <?php echo $active !== 'layout' ? 'style="display:none"' : ''; ?>>
                <table class="form-table">
                    <?php mc_section_head('Wrapper'); ?>
                    <?php mc_row( 'Max Width (px)',      'wrapper_max_width',     $s ); ?>
                    <?php mc_row( 'Padding (px)',        'wrapper_padding',       $s ); ?>
                    <?php mc_row( 'Border Radius (px)',  'wrapper_border_radius', $s ); ?>
                    <?php mc_row( 'Box Shadow',          'box_shadow',            $s ); ?>
                    <?php mc_section_head('Gaps & Spacing'); ?>
                    <?php mc_row( 'Column Gap (px)',         'gap_columns',        $s ); ?>
                    <?php mc_row( 'Card Gap (px)',           'gap_cards',          $s ); ?>
                    <?php mc_row( 'Field Margin Bottom (px)','field_margin_bottom',$s ); ?>
                    <?php mc_section_head('Components'); ?>
                    <?php mc_row( 'Button Border Radius (px)', 'btn_border_radius',  $s ); ?>
                    <?php mc_row( 'Card Border Radius (px)',   'card_border_radius', $s ); ?>
                    <?php mc_row( 'Card Padding (e.g. 18px 20px)', 'card_padding', $s ); ?>
                </table>
            </div>

            <div style="margin-top:20px;padding:16px 0;border-top:1px solid #ddd;">
                <?php submit_button( '💾 Save All Settings', 'primary large', 'submit', false ); ?>
                <span style="color:#888;font-size:13px;margin-left:12px;">Changes apply to all tabs at once</span>
            </div>
        </form>
    </div>

    <script>
    (function(){
        var nav   = document.getElementById('mc-tab-nav');
        var links = nav.querySelectorAll('a[data-tab]');
        links.forEach(function(link){
            link.addEventListener('click', function(e){
                e.preventDefault();
                var target = this.getAttribute('data-tab');
                // Hide all panels
                document.querySelectorAll('.mc-tab-panel').forEach(function(p){ p.style.display='none'; });
                // Show target
                var panel = document.getElementById('mc-tab-' + target);
                if(panel) panel.style.display='';
                // Update active class
                links.forEach(function(l){ l.classList.remove('nav-tab-active'); });
                this.classList.add('nav-tab-active');
                // Update URL hash without reload
                history.replaceState(null,'', location.pathname + location.search.replace(/&?tab=[^&]*/,'') + '&tab=' + target);
            });
        });

        // Color picker sync
        document.querySelectorAll('.mc-color-picker').forEach(function(picker){
            var target = document.getElementById(picker.dataset.target);
            if(!target) return;
            picker.addEventListener('input', function(){ target.value = this.value; });
            target.addEventListener('input', function(){
                if(/^#[0-9a-fA-F]{3,8}$/.test(this.value)) picker.value = this.value;
            });
        });
    })();
    </script>
    <?php
}

// ── Admin helper rows ────────────────────────────────
function mc_section_head( $title ) {
    echo '<tr><th colspan="2" style="padding-top:20px;padding-bottom:0;"><h3 style="margin:0;padding:8px 0;border-bottom:2px solid #2271b1;color:#2271b1;font-size:13px;text-transform:uppercase;letter-spacing:.5px;">' . wp_kses_post($title) . '</h3></th></tr>';
}

function mc_row( $label, $key, $s ) {
    echo '<tr>';
    echo '<th scope="row" style="width:220px;"><label for="mc_' . esc_attr($key) . '">' . wp_kses_post($label) . '</label></th>';
    echo '<td><input name="mc_settings[' . esc_attr($key) . ']" id="mc_' . esc_attr($key) . '" type="text" value="' . $s($key) . '" class="regular-text"></td>';
    echo '</tr>';
}

function mc_color_row( $label, $key, $s ) {
    $val = $s($key);
    echo '<tr>';
    echo '<th scope="row" style="width:220px;"><label for="mc_' . esc_attr($key) . '">' . esc_html($label) . '</label></th>';
    echo '<td style="display:flex;align-items:center;gap:8px;">';
    echo '<input name="mc_settings[' . esc_attr($key) . ']" id="mc_' . esc_attr($key) . '" type="text" value="' . $val . '" class="regular-text" style="width:200px;">';
    if ( preg_match('/^#[0-9a-fA-F]{3,8}$/', $val) ) {
        echo '<input type="color" value="' . esc_attr($val) . '" class="mc-color-picker" data-target="mc_' . esc_attr($key) . '" style="width:40px;height:34px;padding:2px;border:1px solid #ccc;border-radius:4px;cursor:pointer;">';
    }
    echo '</td></tr>';
}

function mc_typo_section( $title, $prefix, $s ) {
    mc_section_head( $title );
    $font_val = $s( $prefix . '_font_family' );
    echo '<tr><th scope="row"><label>Font Family <small style="font-weight:400;color:#888">(blank = use global)</small></label></th>';
    echo '<td><input name="mc_settings[' . esc_attr($prefix) . '_font_family]" type="text" value="' . $font_val . '" class="regular-text" placeholder="e.g. Georgia, serif"></td></tr>';

    $size_val = $s( $prefix . '_font_size' );
    echo '<tr><th scope="row"><label>Font Size (px)</label></th>';
    echo '<td><input name="mc_settings[' . esc_attr($prefix) . '_font_size]" type="number" value="' . $size_val . '" style="width:80px;" min="8" max="120"></td></tr>';

    // Font weight with dropdown
    $w_val = $s( $prefix . '_font_weight' );
    $weights = array('100'=>'100 — Thin','200'=>'200 — Extra Light','300'=>'300 — Light','400'=>'400 — Regular','500'=>'500 — Medium','600'=>'600 — Semi Bold','700'=>'700 — Bold','800'=>'800 — Extra Bold','900'=>'900 — Black');
    echo '<tr><th scope="row"><label>Font Weight</label></th><td>';
    echo '<select name="mc_settings[' . esc_attr($prefix) . '_font_weight]">';
    foreach($weights as $wv => $wl){
        $sel = selected($w_val, $wv, false);
        echo '<option value="' . $wv . '"' . $sel . '>' . $wl . '</option>';
    }
    echo '</select></td></tr>';

    // Font style
    $fs_val = $s( $prefix . '_font_style' );
    echo '<tr><th scope="row"><label>Font Style</label></th><td>';
    echo '<select name="mc_settings[' . esc_attr($prefix) . '_font_style]">';
    foreach(['normal','italic','oblique'] as $fs){
        echo '<option value="' . $fs . '"' . selected($fs_val,$fs,false) . '>' . ucfirst($fs) . '</option>';
    }
    echo '</select></td></tr>';

    // Letter spacing
    $ls_val = $s( $prefix . '_letter_spacing' );
    echo '<tr><th scope="row"><label>Letter Spacing (px)</label></th>';
    echo '<td><input name="mc_settings[' . esc_attr($prefix) . '_letter_spacing]" type="number" value="' . $ls_val . '" style="width:80px;" step="0.5" min="-5" max="20"></td></tr>';

    // Text transform
    $tt_val = $s( $prefix . '_text_transform' );
    echo '<tr><th scope="row"><label>Text Transform</label></th><td>';
    echo '<select name="mc_settings[' . esc_attr($prefix) . '_text_transform]">';
    foreach(['none','uppercase','lowercase','capitalize'] as $tt){
        echo '<option value="' . $tt . '"' . selected($tt_val,$tt,false) . '>' . ucfirst($tt) . '</option>';
    }
    echo '</select></td></tr>';

    // Line height
    $lh_val = $s( $prefix . '_line_height' );
    echo '<tr><th scope="row"><label>Line Height</label></th>';
    echo '<td><input name="mc_settings[' . esc_attr($prefix) . '_line_height]" type="number" value="' . $lh_val . '" style="width:80px;" step="0.1" min="0.8" max="4"></td></tr>';
}

// ═══════════════════════════════════════════════════════
// 6. DYNAMIC CSS  (output in wp_head — all values from DB)
// ═══════════════════════════════════════════════════════
function mc_dynamic_css() {
    $g  = 'mc_get';
    $px = function( $k ) { return intval( mc_get($k) ) . 'px'; };

    // Google Fonts
    $gf = mc_get('google_font_url');
    if ( $gf ) {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link href="' . esc_url($gf) . '" rel="stylesheet">' . "\n";
    }

    // Helper: font-family for an element (falls back to global)
    $ff = function( $prefix ) {
        $ov = mc_get( $prefix . '_font_family' );
        return esc_attr( $ov ? $ov : mc_get('font_family') );
    };
    // Helper: typo block for an element
    $typo = function( $prefix ) use ( $ff, $px ) {
        $ls = mc_get( $prefix . '_letter_spacing' );
        return
            'font-family:'     . $ff($prefix) . ';' .
            'font-size:'       . intval(mc_get($prefix.'_font_size'))   . 'px;' .
            'font-weight:'     . esc_attr(mc_get($prefix.'_font_weight'))     . ';' .
            'font-style:'      . esc_attr(mc_get($prefix.'_font_style'))      . ';' .
            'letter-spacing:'  . esc_attr($ls) . 'px;' .
            'text-transform:'  . esc_attr(mc_get($prefix.'_text_transform'))  . ';' .
            'line-height:'     . esc_attr(mc_get($prefix.'_line_height'))     . ';';
    };
    ?>
<style id="mc-dynamic-css">
/* ── MRK Mortgage Calculator v3 — Dynamic Styles ── */
.mc-wrapper .mortgage {
    max-width: <?php echo $px('wrapper_max_width'); ?>;
    width: 100%;
    background: <?php echo esc_attr($g('color_bg')); ?>;
    border-radius: <?php echo $px('wrapper_border_radius'); ?>;
    padding: <?php echo $px('wrapper_padding'); ?>;
    color: <?php echo esc_attr($g('color_text')); ?>;
    box-shadow: <?php echo esc_attr($g('box_shadow')); ?>;
    font-family: <?php echo esc_attr($g('font_family')); ?>;
}
.mc-wrapper .mortgage-container {
    display: flex;
    gap: <?php echo $px('gap_columns'); ?>;
}
.mc-wrapper .left  { flex: 1; min-width: 0; }
.mc-wrapper .right { flex: 1; min-width: 0; display: flex; flex-direction: column; gap: <?php echo $px('gap_cards'); ?>; }

/* Tag */
.mc-wrapper .tag {
    border: 1px solid <?php echo esc_attr($g('color_tag_border')); ?>;
    color: <?php echo esc_attr($g('color_text')); ?>;
    padding: 6px 12px;
    border-radius: 20px;
    display: inline-block;
    opacity: .8;
    <?php echo $typo('tag'); ?>
}

/* Heading */
.mc-wrapper .heading-row { display: flex; align-items: center; gap: 20px; }
.mc-wrapper .heading-row h2 {
    color: <?php echo esc_attr($g('color_heading')); ?>;
    padding: 0; margin: 30px 0;
    <?php echo $typo('heading'); ?>
}
.mc-wrapper .heading-line { flex: 0.2; height: 1px; background: <?php echo esc_attr($g('color_heading_line')); ?>; }

/* Field */
.mc-wrapper .field { margin-bottom: <?php echo $px('field_margin_bottom'); ?>; }
.mc-wrapper .field-flex { display: flex; justify-content: space-between; align-items: center; }

/* Label */
.mc-wrapper .field label {
    display: block; margin-bottom: 8px; opacity: .85;
    color: <?php echo esc_attr($g('color_label')); ?>;
    <?php echo $typo('label'); ?>
}

/* Input Box */
.mc-wrapper .input-box {
    display: flex; align-items: center; gap: 25px;
    border-radius: 6px;
    border: 1px solid <?php echo esc_attr($g('color_input_border')); ?>;
    background: <?php echo esc_attr($g('color_input_bg')); ?>;
    padding: 10px 14px; width: 170px; margin-bottom: 10px;
}
.mc-wrapper .input-box span {
    color: <?php echo esc_attr($g('color_symbol')); ?>;
    opacity: .7;
}
.mc-wrapper .input-box input {
    background: none; border: none !important; outline: none; width: 100%; height: 30px;
    color: <?php echo esc_attr($g('color_input_text')); ?> !important;
    <?php echo $typo('input'); ?>
}

/* Range */
.mc-wrapper input[type=range] {
    width: 100%; height: 6px; appearance: none;
    background: <?php echo esc_attr($g('color_range_track')); ?>;
    border-radius: 3px !important; padding: 0 !important; border: none !important;
}
.mc-wrapper input[type=range]::-webkit-slider-thumb {
    appearance: none; width: 16px; height: 16px; border-radius: 50%; cursor: pointer;
    background: <?php echo esc_attr($g('color_range_thumb')); ?>;
}
.mc-wrapper input[type=range]::-moz-range-thumb {
    width: 16px; height: 16px; border-radius: 50%; cursor: pointer; border: none;
    background: <?php echo esc_attr($g('color_range_thumb')); ?>;
}

/* Button */
.mc-wrapper .calc-btn {
    margin-top: 20px; width: 100%; border: none; padding: 14px; cursor: pointer;
    border-radius: <?php echo $px('btn_border_radius'); ?>;
    background: <?php echo esc_attr($g('color_btn_bg')); ?>;
    color: <?php echo esc_attr($g('color_btn_text')); ?>;
    transition: background .2s, opacity .2s;
    <?php echo $typo('btn'); ?>
}
.mc-wrapper .calc-btn:hover { background: <?php echo esc_attr($g('color_btn_hover_bg')); ?>; }

/* Cards */
.mc-wrapper .card {
    border-radius: <?php echo $px('card_border_radius'); ?>;
    background: <?php echo esc_attr($g('color_card_bg')); ?>;
    padding: <?php echo esc_attr($g('card_padding')); ?>;
    display: flex; justify-content: space-between; align-items: center;
}
.mc-wrapper .card p {
    margin: 0; opacity: .85;
    color: <?php echo esc_attr($g('color_card_title')); ?>;
    <?php echo $typo('card_title'); ?>
}
.mc-wrapper .card small {
    opacity: .65;
    color: <?php echo esc_attr($g('color_card_sub')); ?>;
    <?php echo $typo('card_sub'); ?>
}
.mc-wrapper .card h3 {
    margin: 0;
    color: <?php echo esc_attr($g('color_result')); ?>;
    <?php echo $typo('result'); ?>
}

/* Responsive */
@media (max-width: 650px) {
    .mc-wrapper .mortgage-container { display: block; }
    .mc-wrapper .calc-btn  { margin-bottom: 30px; }
    .mc-wrapper .mortgage  { padding: 30px; }
    .mc-wrapper .card      { display: block; text-align: center; }
    .mc-wrapper .card p    { padding: 10px 0; }
    .mc-wrapper .card h3   { padding: 10px 0 0; }
    .mc-wrapper .input-box { max-width: 160px; }
}
</style>
    <?php
}
add_action( 'wp_head', 'mc_dynamic_css' );

// ═══════════════════════════════════════════════════════
// 7. SHORTCODE
// ═══════════════════════════════════════════════════════
function mc_calculator_shortcode() {

    wp_enqueue_script( 'mc-script', plugin_dir_url(__FILE__) . 'js/script.js', array(), '3.0', true );
	wp_enqueue_style( 'mrk-calc-style', plugin_dir_url( __FILE__ ) . 'css/style.css', array(), '1.0.0', 'all' );

    wp_localize_script( 'mc-script', 'mc_config', array(
        'currency'     => mc_get('currency_symbol'),
        'default_debt' => mc_get('default_debt'),
        'default_term' => mc_get('default_term'),
        'default_rate' => mc_get('default_rate'),
        'debt_min'     => mc_get('debt_min'),
        'debt_max'     => mc_get('debt_max'),
        'debt_step'    => mc_get('debt_step'),
        'term_min'     => mc_get('term_min'),
        'term_max'     => mc_get('term_max'),
        'term_step'    => mc_get('term_step'),
        'rate_min'     => mc_get('rate_min'),
        'rate_max'     => mc_get('rate_max'),
        'rate_step'    => mc_get('rate_step'),
    ) );

    ob_start(); ?>
<div class="mc-wrapper">
<div class="mortgage">

<span class="tag"><?php echo esc_html(mc_get('tag_text')); ?></span>

<div class="heading-row">
    <h2><?php echo esc_html(mc_get('heading_text')); ?></h2>
    <div class="heading-line"></div>
</div>

<div class="mortgage-container">
<div class="left">

    <div class="field">
        <div class="field-flex">
            <label><?php echo esc_html(mc_get('label_debt')); ?></label>
            <div class="input-box">
                <span><?php echo esc_html(mc_get('currency_symbol')); ?></span>
                <input type="text" id="mc-debt" value="<?php echo esc_attr(mc_get('default_debt')); ?>">
            </div>
        </div>
        <input type="range" id="mc-debtRange"
               min="<?php echo esc_attr(mc_get('debt_min')); ?>"
               max="<?php echo esc_attr(mc_get('debt_max')); ?>"
               step="<?php echo esc_attr(mc_get('debt_step')); ?>"
               value="<?php echo esc_attr(mc_get('default_debt')); ?>">
    </div>

    <div class="field">
        <div class="field-flex">
            <label><?php echo esc_html(mc_get('label_term')); ?></label>
            <div class="input-box">
                <span>Y</span>
                <input type="text" id="mc-term" value="<?php echo esc_attr(mc_get('default_term')); ?>">
            </div>
        </div>
        <input type="range" id="mc-termRange"
               min="<?php echo esc_attr(mc_get('term_min')); ?>"
               max="<?php echo esc_attr(mc_get('term_max')); ?>"
               step="<?php echo esc_attr(mc_get('term_step')); ?>"
               value="<?php echo esc_attr(mc_get('default_term')); ?>">
    </div>

    <div class="field">
        <div class="field-flex">
            <label><?php echo esc_html(mc_get('label_rate')); ?></label>
            <div class="input-box">
                <span>%</span>
                <input type="text" id="mc-rate" value="<?php echo esc_attr(mc_get('default_rate')); ?>">
            </div>
        </div>
        <input type="range" id="mc-rateRange"
               min="<?php echo esc_attr(mc_get('rate_min')); ?>"
               max="<?php echo esc_attr(mc_get('rate_max')); ?>"
               step="<?php echo esc_attr(mc_get('rate_step')); ?>"
               value="<?php echo esc_attr(mc_get('default_rate')); ?>">
    </div>

    <button class="calc-btn" id="mc-calculate"><?php echo esc_html(mc_get('btn_text')); ?></button>

</div><!-- .left -->

<div class="right">
    <div class="card">
        <div><p><?php echo esc_html(mc_get('card1_title')); ?></p><small><?php echo esc_html(mc_get('card1_sub')); ?></small></div>
        <h3 id="mc-monthlyInterest"><?php echo esc_html(mc_get('currency_symbol')); ?>0.00</h3>
    </div>
    <div class="card">
        <div><p><?php echo esc_html(mc_get('card2_title')); ?></p><small><?php echo esc_html(mc_get('card2_sub')); ?></small></div>
        <h3 id="mc-totalInterest"><?php echo esc_html(mc_get('currency_symbol')); ?>0.00</h3>
    </div>
    <div class="card">
        <div><p><?php echo esc_html(mc_get('card3_title')); ?></p><small><?php echo esc_html(mc_get('card3_sub')); ?></small></div>
        <h3 id="mc-monthlyRepayment"><?php echo esc_html(mc_get('currency_symbol')); ?>0.00</h3>
    </div>
    <div class="card">
        <div><p><?php echo esc_html(mc_get('card4_title')); ?></p><small><?php echo esc_html(mc_get('card4_sub')); ?></small></div>
        <h3 id="mc-totalRepayment"><?php echo esc_html(mc_get('currency_symbol')); ?>0.00</h3>
    </div>
</div><!-- .right -->

</div><!-- .mortgage-container -->
</div><!-- .mortgage -->
</div><!-- .mc-wrapper -->
    <?php
    return ob_get_clean();
}
add_shortcode( 'mortgage_calculator', 'mc_calculator_shortcode' );
