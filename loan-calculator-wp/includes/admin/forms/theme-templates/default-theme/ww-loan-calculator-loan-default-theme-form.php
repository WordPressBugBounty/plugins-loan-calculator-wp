<?php
    // Exit if accessed directly
if (!defined('ABSPATH')) exit; 

    /**
    * Settings Page
    *
    * Handle settings
    *
    * @package Loan Calculator
    * @since 1.0.0
    */

    $loan_calculator_all_setting_data = get_option('ww_loan_option');

    $loan_all_setting_data = apply_filters('ww_loan_calculator_all_setting_data', $loan_calculator_all_setting_data, $atts);

    // Color Properties start
    $back_ground_color = isset($loan_all_setting_data['back_ground_color']) ? $loan_all_setting_data['back_ground_color'] : "#1f497d";
    $selected_color = isset($loan_all_setting_data['selected_color']) ? $loan_all_setting_data['selected_color'] : "#1f497d";
    $background_light_color = isset($loan_all_setting_data['background_light_color']) ? $loan_all_setting_data['background_light_color'] : "";
    $border_color = isset($loan_all_setting_data['border_color']) ? $loan_all_setting_data['border_color'] : "";
    $graph_color = isset($loan_all_setting_data['graph_color']) ? $loan_all_setting_data['graph_color'] : "";
    $graph_color_sub = isset($loan_all_setting_data['graph_color_sub']) ? $loan_all_setting_data['graph_color_sub'] : "";
    $graph_border_color = isset($loan_all_setting_data['graph_border_color']) ? $loan_all_setting_data['graph_border_color'] : "";
    $graph_border_color_sub = isset($loan_all_setting_data['graph_border_color_sub']) ? $loan_all_setting_data['graph_border_color_sub'] : "";
    // Color Properties end

    $interested_rate = isset($loan_all_setting_data['interested_rate']) ? $loan_all_setting_data['interested_rate'] : "";
    $ballon_per = isset($loan_all_setting_data['ballon_per']) ? floatval($loan_all_setting_data['ballon_per']) : "10";
    $loan_term = isset($loan_all_setting_data['loan_term']) ? $loan_all_setting_data['loan_term'] : "";

    $loan_amount = isset($loan_all_setting_data['loan_amount']) ? $loan_all_setting_data['loan_amount'] : "10000";
    $monthly_rate = isset($loan_all_setting_data['monthly_rate']) ? $loan_all_setting_data['monthly_rate'] : "";
    $application_fee = isset($loan_all_setting_data['application_fee']) ? $loan_all_setting_data['application_fee'] : "";
    $loan_amount_min_value = isset($loan_all_setting_data['loan_amount_min_value']) ? $loan_all_setting_data['loan_amount_min_value'] : "";
    $loan_amount_max_value = isset($loan_all_setting_data['loan_amount_max_value']) ? $loan_all_setting_data['loan_amount_max_value'] : "";
    $loan_term_min_value = isset($loan_all_setting_data['loan_term_min_value']) ? $loan_all_setting_data['loan_term_min_value'] : "";
    $loan_term_max_value = isset($loan_all_setting_data['loan_term_max_value']) ? $loan_all_setting_data['loan_term_max_value'] : "";

    $interest_rate_min_value = isset($loan_all_setting_data['interest_rate_min_value']) ? $loan_all_setting_data['interest_rate_min_value'] : "";
    $interest_rate_max_value = isset($loan_all_setting_data['interest_rate_max_value']) ? $loan_all_setting_data['interest_rate_max_value'] : "";

    $application_fee_heading = isset($loan_all_setting_data['application_fee_heading']) ? $loan_all_setting_data['application_fee_heading'] : esc_html__('Application fee', 'loan-calculator-wp');
    $total_regular_fees = isset($loan_all_setting_data['total_regular_fees']) ? $loan_all_setting_data['total_regular_fees'] : "";
    $total_fees = isset($loan_all_setting_data['total_fees']) ? $loan_all_setting_data['total_fees'] : "";
    $monthly_fee_heading = isset($loan_all_setting_data['monthly_fee_heading']) ? $loan_all_setting_data['monthly_fee_heading'] : esc_html__('Monthly fee', 'loan-calculator-wp');
    $equipment_finance_loan_heading = isset($loan_all_setting_data['equipment_finance_loan_heading']) ? $loan_all_setting_data['equipment_finance_loan_heading'] : "";
    $equipment_finance_loan_sub_heading_lbl = isset($loan_all_setting_data['equipment_finance_loan_sub_heading_lbl']) ? $loan_all_setting_data['equipment_finance_loan_sub_heading_lbl'] : "";
    $equipment_finance_loan_term1 = isset($loan_all_setting_data['equipment_finance_loan_term1']) ? $loan_all_setting_data['equipment_finance_loan_term1'] : "";
    $equipment_finance_loan_term2 = isset($loan_all_setting_data['equipment_finance_loan_term2']) ? $loan_all_setting_data['equipment_finance_loan_term2'] : "";
    $equipment_finance_loan_term3 = isset($loan_all_setting_data['equipment_finance_loan_term3']) ? $loan_all_setting_data['equipment_finance_loan_term3'] : "";
    $equipment_finance_loan_term4 = isset($loan_all_setting_data['equipment_finance_loan_term4']) ? $loan_all_setting_data['equipment_finance_loan_term4'] : "";
    $equipment_finance_loan_term5 = isset($loan_all_setting_data['equipment_finance_loan_term5']) ? $loan_all_setting_data['equipment_finance_loan_term5'] : "";

    /* START : Calculation Result */
    $regular_repayment_heading = isset($loan_all_setting_data['regular_repayment_heading']) ? $loan_all_setting_data['regular_repayment_heading'] : esc_html__('{frequency} Payment', 'loan-calculator-wp');
    $per_month_heading = isset($loan_all_setting_data['per_month_heading']) ? $loan_all_setting_data['per_month_heading'] : esc_html__('Per month for', 'loan-calculator-wp');
    $years_heading = isset($loan_all_setting_data['years_heading']) ? $loan_all_setting_data['years_heading'] : esc_html__('years', 'loan-calculator-wp');
    $total_interests_payable_heading = isset($loan_all_setting_data['total_interests_payable_heading']) ? $loan_all_setting_data['total_interests_payable_heading'] : esc_html__('Total interest payable', 'loan-calculator-wp');
    $over_heading = isset($loan_all_setting_data['over_heading']) ? $loan_all_setting_data['over_heading'] : esc_html__('over', 'loan-calculator-wp');
    $ballon_amt_heading = isset($loan_all_setting_data['ballon_amt_heading']) ? $loan_all_setting_data['ballon_amt_heading'] : esc_html__('Balloon amount', 'loan-calculator-wp');

    /* END : Calculation Result */

    /* START : Tab Field Setting */
    $loan_feature_product_heading = isset($loan_all_setting_data['loan_feature_product_heading']) ? $loan_all_setting_data['loan_feature_product_heading'] : esc_html__('Loan Product Features', 'loan-calculator-wp');
    $video_heading = isset($loan_all_setting_data['video_heading']) ? $loan_all_setting_data['video_heading'] : esc_html__('Video', 'loan-calculator-wp');
    $loan_table_heading = isset($loan_all_setting_data['loan_table_heading']) ? $loan_all_setting_data['loan_table_heading'] : "";
    $repayment_chart_heading = isset($loan_all_setting_data['repayment_chart_heading']) ? $loan_all_setting_data['repayment_chart_heading'] : esc_html__('Repayment Chart', 'loan-calculator-wp');
    $youtube_video_link = isset($loan_all_setting_data['youtube_video_link']) ? $loan_all_setting_data['youtube_video_link'] : "";

    /* END : Tab Field Setting */

    /* START : Calculator Disclaimer Setting*/
    $contact_info_heading = isset($loan_all_setting_data['contact_info_heading']) ? $loan_all_setting_data['contact_info_heading'] : "";
    $contact_popup_button_heading = isset($loan_all_setting_data['contact_popup_button_heading']) ? $loan_all_setting_data['contact_popup_button_heading'] : "";
    $calculator_disclaimer_heading = isset($loan_all_setting_data['calculator_disclaimer_heading']) ? $loan_all_setting_data['calculator_disclaimer_heading'] : "";
    $calculator_disclaimer_description = isset($loan_all_setting_data['calculator_disclaimer_description']) ? $loan_all_setting_data['calculator_disclaimer_description'] : "";
    $contact_popup_content = isset($loan_all_setting_data['contact_popup_content']) ? $loan_all_setting_data['contact_popup_content'] : "";

    $contact_type = isset($loan_all_setting_data['contact_type']) ? $loan_all_setting_data['contact_type'] : "popup";
    $contact_url = isset($loan_all_setting_data['contact_url']) ? $loan_all_setting_data['contact_url'] : "link";


    /* END :  Calculator Disclaimer Setting*/

    /* START : Tooltip Setting */
    $loan_amount_tooltip = isset($loan_all_setting_data['loan_amount_tooltip']) ? $loan_all_setting_data['loan_amount_tooltip'] : "";
    $loan_amount_label = isset($loan_all_setting_data['loan_amount_label']) ? $loan_all_setting_data['loan_amount_label'] : esc_html__('Loan Amount', 'loan-calculator-wp');
    $loan_terms_tooltip = isset($loan_all_setting_data['loan_terms_tooltip']) ? $loan_all_setting_data['loan_terms_tooltip'] : "";
    $interest_rates_tooltip = isset($loan_all_setting_data['interest_rates_tooltip']) ? $loan_all_setting_data['interest_rates_tooltip'] : "";
    $payment_mode_tooltip = isset($loan_all_setting_data['payment_mode_tooltip']) ? $loan_all_setting_data['payment_mode_tooltip'] : "";
    $balloon_amount_tooltip = isset($loan_all_setting_data['balloon_amount_tooltip']) ? $loan_all_setting_data['balloon_amount_tooltip'] : "";

    /* Disable Payment Mode*/

    $payment_mode_enable = isset($loan_all_setting_data['payment_mode_enable']) ? $loan_all_setting_data['payment_mode_enable'] : "";
    $choose_default_payment_mode = isset($loan_all_setting_data['choose_default_payment_mode']) ? $loan_all_setting_data['choose_default_payment_mode'] : "";

    /* END : Tooltip Setting */

    /* START : Header Link Section*/
    $print_label = isset($loan_all_setting_data['print_label']) ? $loan_all_setting_data['print_label'] : esc_html__('Print', 'loan-calculator-wp');
    $about_this_calculator_disable = isset($loan_all_setting_data['about_this_calculator_disable']) ? $loan_all_setting_data['about_this_calculator_disable'] : "";
    $about_this_calculator = isset($loan_all_setting_data['about_this_calculator']) ? $loan_all_setting_data['about_this_calculator'] : "";
    $calculator_popup_content = isset($loan_all_setting_data['calculator_popup_content']) ? stripslashes($loan_all_setting_data['calculator_popup_content']) : "";
    /* END : Header Link Section */
    /* START : Calculation Fee Setting Enable */
    $calculation_fee_setting_enable = isset($loan_all_setting_data['calculation_fee_setting_enable']) ? $loan_all_setting_data['calculation_fee_setting_enable'] : "";
    $calculator_heading = isset($loan_all_setting_data['calculator_heading']) ? $loan_all_setting_data['calculator_heading'] : "";
    /* END : Calculation Fee Setting Enable */

    /* START : Tab Enable Settings */
    $enable_repayment_chart = isset($loan_all_setting_data['enable_repayment_chart']) ? $loan_all_setting_data['enable_repayment_chart'] : "";
    $enable_video_tab = isset($loan_all_setting_data['enable_video_tab']) ? $loan_all_setting_data['enable_video_tab'] : "";
    $enable_loan_mortisation_tab = isset($loan_all_setting_data['enable_loan_mortisation_tab']) ? $loan_all_setting_data['enable_loan_mortisation_tab'] : "";
    $print_option_enable = isset($loan_all_setting_data['print_option_enable']) ? $loan_all_setting_data['print_option_enable'] : "";
    $print_option_heading = isset($loan_all_setting_data['print_option_heading']) ? $loan_all_setting_data['print_option_heading'] : "";

    $ww_loan_currency = isset($loan_all_setting_data['ww_loan_currency']) ? $loan_all_setting_data['ww_loan_currency'] : "";
    $currency_symbols = ww_loan_get_currency_symbol($ww_loan_currency);

    /* END : Tab Enable Settings */

    /* START : NEW SETTINGS ADDED */
    $disable_ballon_amt = isset($loan_all_setting_data['disable_ballon_amt']) ? $loan_all_setting_data['disable_ballon_amt'] : "";

    $disable_repayment_frequency = isset($loan_all_setting_data['disable_repayment_frequency']) ? $loan_all_setting_data['disable_repayment_frequency'] : "";

    $disable_repayment_frequency_monthly = isset($loan_all_setting_data['disable_repayment_frequency_monthly']) ? $loan_all_setting_data['disable_repayment_frequency_monthly'] : "";

    $disable_repayment_frequency_quarterly = isset($loan_all_setting_data['disable_repayment_frequency_quarterly']) ? $loan_all_setting_data['disable_repayment_frequency_quarterly'] : "";

    $disable_repayment_frequency_yearly = isset($loan_all_setting_data['disable_repayment_frequency_yearly']) ? $loan_all_setting_data['disable_repayment_frequency_yearly'] : "";

    /* Repayment Frequency options */
    $get_repayment_frequency = (isset($loan_all_setting_data['repayment_frequency']) ? $loan_all_setting_data['repayment_frequency'] : "");

    // Dropdown Values
    $repayment_frequency_label = ww_loan_repayment_frequency_label();

    $disable_contactus_section = isset($loan_all_setting_data['disable_contactus_section']) ? $loan_all_setting_data['disable_contactus_section'] : "";

    $disable_calculator_disclaimer_section = isset($loan_all_setting_data['disable_calculator_disclaimer_section']) ? $loan_all_setting_data['disable_calculator_disclaimer_section'] : "";

    $disable_tabs_icon = isset($loan_all_setting_data['disable_tabs_icon']) ? $loan_all_setting_data['disable_tabs_icon'] : "";

    /* END : NEW SETTING ADDED */

    /* loan term label option */

    $ww_loan_term_label = isset($loan_all_setting_data['ww_loan_term_label']) ? $loan_all_setting_data['ww_loan_term_label'] : "";
    /* loan term label option */


    /* loan term total interest payable */

    $ww_loan_total_interest_payable = isset($loan_all_setting_data['ww_loan_total_interest_payable']) ? $loan_all_setting_data['ww_loan_total_interest_payable'] : "";

    /* loan term total interest payable */


    /* down payment options */

    $down_payment_option = isset($loan_all_setting_data['down_payment_option']) ? $loan_all_setting_data['down_payment_option'] : "";

    $down_payment_mode = isset($loan_all_setting_data['down_payment_mode']) ? $loan_all_setting_data['down_payment_mode'] : "fixed";


    $down_payment_tooltip = isset($loan_all_setting_data['down_payment_tooltip']) ? $loan_all_setting_data['down_payment_tooltip'] : "";


    $down_payment_heading = isset($loan_all_setting_data['down_payment_heading']) ? $loan_all_setting_data['down_payment_heading'] : esc_html__('Down Payment Amount', 'loan-calculator-wp');


    /* down paymnet label and max cap */

    $down_payment_label = isset($loan_all_setting_data['down_payment_label']) ? $loan_all_setting_data['down_payment_label'] : esc_html__('Down Payment', 'loan-calculator-wp');

    $down_payment_max_per = isset($loan_all_setting_data['down_payment_max_per']) ? $loan_all_setting_data['down_payment_max_per'] : "100";


    /* down payment options */

    /* Extra payment options */

    $extra_payment_option = isset($loan_all_setting_data['extra_payment_option']) ? $loan_all_setting_data['extra_payment_option'] : "";

    $extra_payment_tooltip = isset($loan_all_setting_data['extra_payment_tooltip']) ? $loan_all_setting_data['extra_payment_tooltip'] : "";

    $extra_payment_max_per = isset($loan_all_setting_data['extra_payment_max_per']) ? $loan_all_setting_data['extra_payment_max_per'] : "100";


    if($extra_payment_max_per == "100"){

        $extra_payment_max_val =  $loan_amount;

    }
    else{

        $extra_payment_max_val = round(( (int) $loan_amount * (int) $extra_payment_max_per ) / 100);

    }

    $extra_payment_heading = isset($loan_all_setting_data['extra_payment_heading']) ? $loan_all_setting_data['extra_payment_heading'] : esc_html__('Extra Payment Amount', 'loan-calculator-wp');      


    $extra_payment_save_time_label = isset($loan_all_setting_data['extra_payment_save_time_label']) ? $loan_all_setting_data['extra_payment_save_time_label'] : esc_html__('Time Saved From Extra Payments', 'loan-calculator-wp');  


    $extra_payment_total_label = isset($loan_all_setting_data['extra_payment_total_label']) ? $loan_all_setting_data['extra_payment_total_label'] : esc_html__('Total Extra Payments', 'loan-calculator-wp');  


    $hide_total_extra_payments = isset($loan_all_setting_data['hide_total_extra_payments']) ? $loan_all_setting_data['hide_total_extra_payments'] : "";

    $hide_save_time_extra_payments = isset($loan_all_setting_data['hide_save_time_extra_payments']) ? $loan_all_setting_data['hide_save_time_extra_payments'] : "";


    $extra_payment_save_interest_label = isset($loan_all_setting_data['extra_payment_save_interest_label']) ? $loan_all_setting_data['extra_payment_save_interest_label'] : esc_html__('Interest Saved From Extra Payments', 'loan-calculator-wp'); 

    $hide_save_interest_extra_payments = isset($loan_all_setting_data['hide_save_interest_extra_payments']) ? $loan_all_setting_data['hide_save_interest_extra_payments'] : "";

    /* Extra payment options */


    /* disable interest rate adjustment */

    $interest_rates_adj_disable = isset($loan_all_setting_data['interest_rates_adj_disable']) ? $loan_all_setting_data['interest_rates_adj_disable'] : "";


    /* remove all range slider fields */

    $remove_range_sliders = isset($loan_all_setting_data['remove_range_sliders']) ? $loan_all_setting_data['remove_range_sliders'] : "";



    /* stacked bar chart options */

    
    $balance_border_color_graph = isset($loan_all_setting_data['balance_border_color_graph']) ? $loan_all_setting_data['balance_border_color_graph'] : "";
    $balance_point_background_color_graph = isset($loan_all_setting_data['balance_point_background_color_graph']) ? $loan_all_setting_data['balance_point_background_color_graph'] : "";
    $extra_payment_graph_color = isset($loan_all_setting_data['extra_payment_graph_color']) ? $loan_all_setting_data['extra_payment_graph_color'] : "";  

    $chart_types = isset($loan_all_setting_data['chart_types']) ? $loan_all_setting_data['chart_types'] : "";  


    /* summary pie chart options */

    $summary_chart_option = isset($loan_all_setting_data['summary_chart_option']) ? $loan_all_setting_data['summary_chart_option'] : "";

    $summary_chart_label = isset($loan_all_setting_data['summary_chart_label']) ? $loan_all_setting_data['summary_chart_label'] : esc_html__('Break-up of Total Payment', 'loan-calculator-wp');

    $summary_chart_principal_fill_color = isset($loan_all_setting_data['summary_chart_principal_fill_color']) ? $loan_all_setting_data['summary_chart_principal_fill_color'] : "";

    $summary_chart_interest_fill_color = isset($loan_all_setting_data['summary_chart_interest_fill_color']) ? $loan_all_setting_data['summary_chart_interest_fill_color'] : "";

    $summary_chart_ballon_payment_fill_color = isset($loan_all_setting_data['summary_chart_ballon_payment_fill_color']) ? $loan_all_setting_data['summary_chart_ballon_payment_fill_color'] : "";

    $summary_chart_down_payment_fill_color = isset($loan_all_setting_data['summary_chart_down_payment_fill_color']) ? $loan_all_setting_data['summary_chart_down_payment_fill_color'] : "";

    $summary_chart_extra_payment_fill_color = isset($loan_all_setting_data['summary_chart_extra_payment_fill_color']) ? $loan_all_setting_data['summary_chart_extra_payment_fill_color'] : "";


    /* field label start */

    $loan_term_field_label = isset($loan_all_setting_data['loan_term_field_label']) ? $loan_all_setting_data['loan_term_field_label'] : esc_html__('No. of Payments', 'loan-calculator-wp'); 

    $balloon_amount_field_label = isset($loan_all_setting_data['balloon_amount_field_label']) ? $loan_all_setting_data['balloon_amount_field_label'] : esc_html__('Balloon Amount', 'loan-calculator-wp');

    $extra_payment_field_label = isset($loan_all_setting_data['extra_payment_field_label']) ? $loan_all_setting_data['extra_payment_field_label'] : esc_html__('Extra Payment', 'loan-calculator-wp');   

    $interest_rate_field_label = isset($loan_all_setting_data['interest_rate_field_label']) ? $loan_all_setting_data['interest_rate_field_label'] : esc_html__('Interest Rate', 'loan-calculator-wp');    

    $payment_mode_field_label = isset($loan_all_setting_data['payment_mode_field_label']) ? $loan_all_setting_data['payment_mode_field_label'] : esc_html__('Payment Mode', 'loan-calculator-wp');   

    /* hide payment mode option */

    $hide_payment_mode = isset($loan_all_setting_data['hide_payment_mode']) ? $loan_all_setting_data['hide_payment_mode'] : "";

    $payment_mode_fields_display_style = "";

    if($hide_payment_mode == '1'){

        $payment_mode_fields_display_style = 'style=display:none;';

    }

    ?>
    <div class="wp-loan-calculator-main" id="wp-loan-calculator-main">
        <style type="text/css">
            :root {
                --calc-background-color: <?php echo esc_attr($back_ground_color); ?>;
                --calc-select-color: <?php echo esc_attr($selected_color); ?>;
                --calc-bg-light-color: <?php echo esc_attr($background_light_color); ?>;
                --calc-border-color: <?php echo esc_attr($border_color); ?>;
                --calc-graph-color: <?php echo esc_attr($graph_color); ?>;
                --calc-graph-color-sub: <?php echo esc_attr($graph_color_sub); ?>;
                --calc-graph-border-color: <?php echo esc_attr($graph_border_color); ?>;
                --calc-graph-border-color-sub: <?php echo esc_attr($graph_border_color_sub); ?>;
                --calc-graph-balance-border-color: <?php echo esc_attr($balance_border_color_graph); ?>;
                --calc-graph-balance-point-background-color: <?php echo esc_attr($balance_point_background_color_graph); ?>;
                --calc-graph-extra-payment-graph-color: <?php echo esc_attr($extra_payment_graph_color); ?>;
                --calc-summary-chart-principal-fill-color: <?php echo esc_attr($summary_chart_principal_fill_color); ?>;
                --calc-summary-chart-interest-fill-color: <?php echo esc_attr($summary_chart_interest_fill_color); ?>;
                --calc-summary-chart-balloon-payment-fill-color: <?php echo esc_attr($summary_chart_ballon_payment_fill_color); ?>;
                --calc-summary-chart-down-payment-fill-color: <?php echo esc_attr($summary_chart_down_payment_fill_color); ?>;
                --calc-summary-chart-extra-payment-fill-color: <?php echo esc_attr($summary_chart_extra_payment_fill_color); ?>;                

            }
        </style>
        <div id="overlay" style="display: none;"></div>
        <div id="loader" style="display: none;">
          <div class="spinner"></div>
      </div>
      <section class="heading-section">
        <div class="menu-sec-cls">
            <ul class="heading-sec-link">
                <?php
                if ($print_option_enable) { ?>
                    <li>
                        <a href="javascript:void(0);" class="print-table"><i class="fa fa-print" aria-hidden="true"></i><?php echo esc_attr($print_option_heading); ?></a>
                    </li>
                <?php  } ?>
                <?php if ($about_this_calculator_disable == "") { ?>
                    <li>
                        <a href="javascript:void(0);" onclick="jQuery('.about-this-calculator-popup').show();jQuery('body').addClass('body-overflow-hidden');"><i class="fa fa-info-circle" aria-hidden="true"></i><?php echo esc_attr($about_this_calculator); ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="about-this-calculator-popup" style="display: none;">
            <div class="about-this-calculator-popup-body">
                <a href="javascript:void(0);" class="close-button" onclick="jQuery('.about-this-calculator-popup').hide();jQuery('body').removeClass('body-overflow-hidden');">✕</a>
                <?php
                    // very permissive: allows pretty much all HTML to pass - same as what's normally applied to the_content by default
                /*$allowed_html = wp_kses_allowed_html('post');
                $calculator_popup_content = wp_kses(stripslashes_deep($calculator_popup_content), $allowed_html);*/
                ?>
                <div class="calculator-content"><?php echo wp_kses_post($calculator_popup_content); ?></div>
            </div>
        </div>
    </section>

    <section id="main-sec" class="ctm_main_wrap">
        <section class="calculator-heading-section calculator-heading-block">
            <div class="calculator-child-heading">
                <h2>
                    <center><strong><?php echo esc_attr($calculator_heading); ?></strong></center>
                </h2>
            </div>
        </section>
        <section class="loan-option-text-info">
            <div class="custom-container loan-option-text-info-section">
                <div class="loan-option-text-info-block">
                    <div class="first-row">
                        <div class="first-row-sub-child <?php if($hide_payment_mode == '1'){ ?> lc-fifty-perc-field <?php } ?>"  >

                            <label for="loan_amt" class="loan-text"><?php echo esc_html($loan_amount_label, 'loan-calculator-wp'); ?><i class="fa fa-info-circle" aria-hidden="true" tabindex="1"></i><span class="text-tooltip-disp"><?php echo esc_attr($loan_amount_tooltip, 'loan-calculator-wp'); ?></span></label>
                            <div class="loan-text-dis loan-amount">
                                <span class="extra-info"><?php echo esc_attr($currency_symbols); ?></span>
                                <input type="text" name="loan_amount" id="loan_amount" value="" tabindex="2" oninput="validateInputLoanRate(this)" onkeydown="return onlyNos(event,'loan_amount')" />
                            </div>
                            <input type="range" min="<?php echo esc_attr($loan_amount_min_value, 'loan-calculator-wp'); ?>" max="<?php echo esc_attr($loan_amount_max_value, 'loan-calculator-wp'); ?>" value="<?php echo esc_attr($loan_amount, 'loan-calculator-wp'); ?>" class="slider <?php if($remove_range_sliders =='1') { echo 'remove-cal-range-sliders'; } ?>" id="loan_amount_range" tabindex="3" >
                        </div>
                        <div class="first-row-sub-child <?php if($hide_payment_mode == '1'){ ?> lc-fifty-perc-field <?php } ?>">
                            <label for="loan_terms" class="loan-text"><?php echo esc_attr($loan_term_field_label, 'loan-calculator-wp'); ?><i class="fa fa-info-circle" aria-hidden="true" tabindex="4"></i><span class="text-tooltip-disp"><?php echo esc_attr($loan_terms_tooltip, 'loan-calculator-wp');?></span></label>
                            <div class="loan-number-payment-with-label">
                                <div class="loan-text-dis no-payment">
                                    <!-- <span class="extra-info"><//?php echo __('Months', 'loan-calculator-wp'); ?></span> -->
                                    <?php if (!empty($get_repayment_frequency)) {
                                        $rpfclass = (count($get_repayment_frequency) == 1 ? 'single-val-option' : '');
                                        ?>
                                        <select name="repayment_freq" id="repayment_freq" class="payment-opt-drop <?php echo esc_attr($rpfclass); ?>">
                                            <?php
                                            foreach ($get_repayment_frequency as $key => $value) {
                                                $selected = ($key == 0 ? 'selected' : '');
                                                ?>
                                                <option value="<?php echo esc_attr($value); ?>" <?php echo esc_attr($selected); ?>><?php echo esc_attr($repayment_frequency_label[$value]); ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>                                  
                                    <?php } else { ?>
                                        <select name="repayment_freq" id="repayment_freq" class="payment-opt-drop single-val-option">
                                            <option value="Monthly" selected><?php echo esc_attr($repayment_frequency_label['Monthly']);?></option>
                                        </select>
                                    <?php } ?>
                                    <input type="text" name="loan_terms" min="<?php echo esc_attr($loan_term_min_value, 'loan-calculator-wp'); ?>" max="<?php echo esc_attr($loan_term_max_value, 'loan-calculator-wp'); ?>" maxlength="5" id="loan_terms" value="" tabindex="5" onkeydown="return onlyNos(event,'loan_terms')" />

                                </div>

                                <?php if($ww_loan_term_label== "1") { ?>

                                    <label id="label-for-freuency"></label> 

                                <?php } ?>
                            </div>

                            <input type="range" min="<?php echo esc_attr($loan_term_min_value, 'loan-calculator-wp'); ?>" max="<?php echo esc_attr($loan_term_max_value, 'loan-calculator-wp'); ?>" value="<?php echo esc_attr($loan_term, 'loan-calculator-wp'); ?>" class="slider <?php if($remove_range_sliders =='1') { echo 'remove-cal-range-sliders'; } ?>" id="loan_terms_range" tabindex="6" step="1">
                            <input type="hidden" name="default_value" value="<?php echo esc_attr($loan_term, 'loan-calculator-wp');?>">
                            <input type="hidden" name="min_value" value="<?php echo esc_attr($loan_term_min_value, 'loan-calculator-wp'); ?>">
                            <input type="hidden" name="max_value" value="<?php echo esc_attr($loan_term_max_value, 'loan-calculator-wp'); ?>">
                            <input type="hidden" name="current_repayment_freq" value="">
                        </div>
                        <div class="first-row-sub-child" <?php echo esc_attr($payment_mode_fields_display_style); ?>>
                            <?php if ($payment_mode_enable == '1' && $choose_default_payment_mode == 'In Arrears') { ?>
                                <div class="first-row-main-child">
                                    <label for="loan_amt" class="loan-text"><?php echo esc_attr($payment_mode_field_label, 'loan-calculator-wp'); ?><i class="fa fa-info-circle" aria-hidden="true" tabindex="8"></i><span class="text-tooltip-disp"><?php echo esc_attr($payment_mode_tooltip, 'loan-calculator-wp'); ?></span></label>
                                    <select name="payment_type" id="payment_type" class="payment-opt-drop">
                                        <option value="<?php echo esc_attr($choose_default_payment_mode, 'loan-calculator-wp'); ?>" selected> <?php echo esc_attr('In Arrears', 'loan-calculator-wp'); ?></option>
                                    </select>
                                </div>
                            <?php  } else if ($payment_mode_enable == '1' && $choose_default_payment_mode == 'In Advanced') {
                                ?>
                                <div class="first-row-main-child">
                                    <label for="loan_amt" class="loan-text"><?php echo esc_attr($payment_mode_field_label, 'loan-calculator-wp'); ?><i class="fa fa-info-circle" aria-hidden="true" tabindex="8"></i><span class="text-tooltip-disp"><?php echo esc_attr($payment_mode_tooltip, 'loan-calculator-wp'); ?></span></label>
                                    <select name="payment_type" id="payment_type" class="payment-opt-drop">
                                        <option value="<?php echo esc_attr('In Advance', 'loan-calculator-wp'); ?>" selected> <?php echo esc_attr('In Advance', 'loan-calculator-wp'); ?></option>
                                    </select>
                                </div>
                            <?php } else {
                                ?>
                                <div class="first-row-main-child">
                                    <label for="loan_amt" class="loan-text"><?php echo esc_attr($payment_mode_field_label, 'loan-calculator-wp'); ?><i class="fa fa-info-circle" aria-hidden="true" tabindex="8"></i><span class="text-tooltip-disp"><?php echo esc_attr($payment_mode_tooltip, 'loan-calculator-wp'); ?></span></label>
                                    <select name="payment_type" id="payment_type" class="payment-opt-drop">
                                        <option <?php echo ($choose_default_payment_mode == 'In Advanced') ? 'selected' : ''; ?> value="<?php echo esc_attr('In Advance', 'loan-calculator-wp'); ?>"><?php echo esc_attr('In Advance', 'loan-calculator-wp'); ?></option>
                                        <option <?php echo ($choose_default_payment_mode == 'In Arrears') ? 'selected' : ''; ?> value="<?php echo esc_attr('In Arrears', 'loan-calculator-wp'); ?>"><?php echo esc_attr('In Arrears', 'loan-calculator-wp'); ?></option>
                                    </select>
                                </div>
                            <?php }
                            ?>                           
                        </div>
                    </div>
                    <div class="second-row">
                         <div class="second-row-sub-child">
                            <label for="loan_amt" class="loan-text"><?php echo esc_attr($interest_rate_field_label, 'loan-calculator-wp'); ?><i class="fa fa-info-circle" aria-hidden="true" tabindex="8"></i><span class="text-tooltip-disp"><?php echo esc_attr($interest_rates_tooltip, 'loan-calculator-wp'); ?></span></label>
                            <div class="loan-text-dis">
                                <input type="text" name="interest_rates" id="interest_rates" value="" tabindex="9" <?php if($interest_rates_adj_disable =='1') { echo 'disabled'; } ?> />
                                <span id="interest_rate_range_dis" class="rate_disp"></span>
                            </div>
                            <input type="range" min="<?php echo esc_attr($interest_rate_min_value, 'loan-calculator-wp'); ?>" max="<?php echo esc_attr($interest_rate_max_value, 'loan-calculator-wp'); ?>" value="<?php echo esc_attr($interested_rate, 'loan-calculator-wp'); ?>" class="slider <?php if($interest_rates_adj_disable =='1') { echo 'disabled-rate-adj'; } ?> <?php if($remove_range_sliders =='1') { echo 'remove-cal-range-sliders'; } ?>" id="interest_rate_range" tabindex="10" step="0.25">
                        </div>
                        <?php if ($disable_ballon_amt == 1) { ?>
                            <div class="second-row-sub-child">

                                <div class="loan-text-dis">
                                    <input type="hidden" name="ballon_amounts" id="ballon_amounts" value="" tabindex="11" onkeydown="return onlyNos(event,'ballon_amounts')" />

                                    <input type="hidden" name="ballon_amounts_per" id="ballon_amounts_per" value="<?php  echo esc_attr($ballon_per); ?>" tabindex="12" />
                                </div>
                                <input type="hidden" id="ballon_amount_range" tabindex="13" step="1" value="<?php echo esc_attr($ballon_per); ?>">
                            </div>
                        <?php } else {
                            try {
                                ?>
                                <div class="second-row-sub-child">
                                    <label for="loan_amt" class="loan-text"><?php echo esc_attr($balloon_amount_field_label, 'loan-calculator-wp'); ?><i class="fa fa-info-circle" aria-hidden="true" tabindex="8"></i><span class="text-tooltip-disp"><?php echo esc_attr($balloon_amount_tooltip, 'loan-calculator-wp'); ?></span></label>
                                    <div class="loan-text-dis">
                                        <span class="extra-info"><?php echo esc_attr($currency_symbols); ?></span>
                                        <input type="text" name="ballon_amounts" id="ballon_amounts" value="" tabindex="11" onkeydown="return onlyNos(event,'ballon_amounts')" readonly />
                                        <span class="relative ballon_items">
                                            <input type="text" name="ballon_amounts_per" id="ballon_amounts_per" value="" tabindex="12" maxlength="5" onkeydown="return onlyNos(event,'ballon_amounts_per')">
                                            <span id="ballon_amounts_per_dis" min="0" max="<?php echo  esc_attr($ballon_per); ?>" class="rate_disp"></span>
                                        </span>
                                    </div>
                                    <input type="range" min="0" value="<?php echo esc_attr($ballon_per); ?>" class="slider <?php if($remove_range_sliders =='1') { echo 'remove-cal-range-sliders'; } ?>" id="ballon_amount_range" tabindex="13" step="1">
                                </div>
                                <?php
                            } catch (\Throwable $error) {
                                throw $error;
                            }
                            ?>
                        <?php  } ?>
                    </div>
                    <div class="site-wraps-row-downpayment-extrapayment-row">
                        <?php if($down_payment_option == '1') {  ?>

                            <div class="downpayment-row">

                                <?php if($down_payment_mode == 'percentage'){   ?> 

                                    <div class="downpayment-row-sub-child dp-perc-mode">
                                        <label for="down_payment" class="loan-text"><?php echo esc_html($down_payment_label, 'loan-calculator-wp'); ?> <i class="fa fa-info-circle" aria-hidden="true" tabindex="8"></i><span class="text-tooltip-disp"><?php echo esc_attr($down_payment_tooltip, 'loan-calculator-wp'); ?></span></label>
                                        <div class="loan-text-dis">
                                            <span class="extra-info"><?php echo esc_attr($currency_symbols); ?></span>
                                            <input type="text" name="down_payment" id="down_payment" value="" tabindex="14" onkeydown="return onlyNos(event,'down_payment')" readonly />
                                            <span class="relative downpayment_items">
                                                <input type="text" name="down_payment_per" id="down_payment_per" value="" tabindex="15" maxlength="5" onkeydown="return onlyNos(event,'down_payment_per')">
                                                <span id="down_payment_per_dis" min="0" max="" class="down_payment_rate_disp"></span>
                                            </span>
                                        </div>
                                        <input type="range" min="0" value="0" class="slider <?php if($remove_range_sliders =='1') { echo 'remove-cal-range-sliders'; } ?>" id="down_payment_range" tabindex="16" step="1">

                                    </div>

                                <?php }else{ ?>

                                    <div class="downpayment-row-sub-child dp-fixed-mode">
                                        <label for="down_payment" class="loan-text"><?php echo esc_html($down_payment_label, 'loan-calculator-wp'); ?> <i class="fa fa-info-circle" aria-hidden="true" tabindex="8"></i><span class="text-tooltip-disp"><?php echo esc_attr($down_payment_tooltip, 'loan-calculator-wp'); ?></span></label>
                                        <div class="loan-text-dis">
                                            <span class="extra-info"><?php echo esc_attr($currency_symbols); ?></span>
                                            <input type="text" name="down_payment" id="down_payment" value="0" tabindex="14" onkeydown="return onlyNos(event,'down_payment')" />
                                        </div>                                        
                                    </div>

                                <?php }  ?>
                            </div>
                        <?php } ?>

                        <?php if($extra_payment_option == '1') {  ?>

                            <div class="extrapayment-row">                            

                                <div class="extrapayment-row-sub-child ">
                                    <label for="extra_payment" class="loan-text"><?php echo esc_attr($extra_payment_field_label, 'loan-calculator-wp'); ?><i class="fa fa-info-circle" aria-hidden="true" tabindex="8"></i><span class="text-tooltip-disp"><?php echo esc_attr($extra_payment_tooltip, 'loan-calculator-wp'); ?></span></label>
                                    <div class="loan-text-dis">
                                        <span class="extra-info"><?php echo esc_attr($currency_symbols); ?></span>
                                        <input type="text" name="extra_payment" id="extra_payment" value="0" tabindex="14" onkeydown="return onlyNos(event,'extra_payment')" />                                    
                                    </div>
                                    <input type="range" min="0" max="<?php echo esc_attr($extra_payment_max_val, 'loan-calculator-wp'); ?>" value="0" class="slider <?php if($remove_range_sliders =='1') { echo 'remove-cal-range-sliders'; } ?>" id="extra_payment_range" tabindex="16" step="1">

                                </div>

                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php
            $full_width_cls = '';
            if ($enable_repayment_chart != 1 && $enable_video_tab != 1 && $enable_loan_mortisation_tab != 1) {
                $full_width_cls = 'full-width';
            }
            ?>
            <div class="loan-detail-section <?php echo esc_attr($full_width_cls); ?>">
                <div class="loan-detail-section-child">
                    <div class="sub-main-tab">
                        <div class="ww-loan-container">
                            <div class="tabs">

                                <?php
                                $tab1_checked = $tab2_checked = $tab3_checked = "";
                                if ($enable_repayment_chart == 1) {
                                    $tab1_checked  = "checked";
                                } else if ($enable_video_tab == 1) {
                                    $tab2_checked = "checked";
                                } else if ($enable_loan_mortisation_tab == 1) {
                                    $tab3_checked = "checked";
                                }
                                ?>
                                
                                <input type="radio" name="tabs" id="tab1" <?php echo esc_attr($tab1_checked); ?>>
                                <label for="tab1" style="display: <?php echo ($enable_repayment_chart == 1 ? 'block' : 'none'); ?>;">
                                    <?php if ($disable_tabs_icon == "") { ?>
                                        <i class="fa fa-chart-bar"></i>
                                        <span class="tooltip-disp"><?php echo esc_attr($repayment_chart_heading, 'loan-calculator-wp'); ?></span>
                                    <?php } else { ?>
                                        <span><?php echo esc_attr($repayment_chart_heading, 'loan-calculator-wp'); ?></span>
                                    <?php } ?>
                                </label>
                                <input type="radio" name="tabs" id="tab3" <?php echo esc_attr($tab3_checked); ?>>
                                <label for="tab3" style="display: <?php echo ($enable_loan_mortisation_tab == 1 ? 'block' : 'none'); ?>;">
                                    <?php if ($disable_tabs_icon == "") { ?>
                                        <i class="fa fa-tasks"></i>
                                        <span class="tooltip-disp"><?php echo esc_attr($loan_table_heading, 'loan-calculator-wp'); ?></span>
                                    <?php } else { ?>
                                        <span class=""><?php echo esc_attr($loan_table_heading, 'loan-calculator-wp'); ?></span>
                                    <?php } ?>
                                </label>
                                <input type="radio" name="tabs" id="tab2" <?php esc_attr($tab2_checked); ?>>
                                <label for="tab2" style="display: <?php echo ($enable_video_tab == 1 ? 'block' : 'none'); ?>;">
                                    <?php if ($disable_tabs_icon == "") { ?>
                                        <i class="fa fa-play"></i>
                                        <span class="tooltip-disp"><?php echo esc_attr($video_heading, 'loan-calculator-wp'); ?></span>
                                    <?php } else { ?>
                                        <span><?php echo esc_attr($video_heading, 'loan-calculator-wp'); ?></span>
                                    <?php } ?>
                                </label>
                                <?php  //} ?>
                                <div id="tab-content1" class="tab-content">
                                    <canvas id="loan-process-graph" width="650" height="320"></canvas>
                                    <?php if($chart_types=='stacked_bar'){ ?>
                                        <div id="lc-chart-legend-container"></div>
                                    <?php } ?>
                                        <div id="chart-note" class="chart-note"><p>**Note: For exceeding 120 no. of payments, a group of 12 payments will be combined into a single payment number for better chart visibility.</p></div>
                                </div>
                                <div id="tab-content2" class="tab-content">
                                    <?php
                                    if (!empty($youtube_video_link && $enable_video_tab == 1)) {
                                        ?>
                                        <iframe height="415" src="<?php echo esc_url($youtube_video_link); ?>" style="width:100%;" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    <?php }else{ ?>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/VhvlcwYUyIg?si=XQyDoLGla6aoue1v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <?php } ?>
                                </div>                               
                                <div id="tab-content3" class="tab-content">
                                    <table id="loan-process-tbl">
                                        <thead>
                                            <tr>
                                                <th><?php echo esc_attr('Period', 'loan-calculator-wp'); ?></th>
                                                <th><?php echo esc_attr('Payment', 'loan-calculator-wp'); ?></th>
                                                <?php if($extra_payment_option=='1'){ ?>
                                                    <th class="extra-payment-column"><?php echo esc_attr('Extra Payment', 'loan-calculator-wp'); ?></th>
                                                <?php } ?>
                                                <th><?php echo esc_attr('Interest', 'loan-calculator-wp'); ?></th>
                                                <th><?php echo esc_attr('Balance', 'loan-calculator-wp'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody id="loan_table_data">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="loan-detail-section-child <?php if($summary_chart_option=='1'){ ?> default-theme with-summary-chart page-break<?php } ?>" >
                    <div class="summary-calculation-and-chart-wrappar">
                    <div class="loan-detail-cal-desc">
                        <div class="loan-cal-desc">
                            <div class="loan-cal-desc-heading main-heading">
                                <label id="regular_repayment_heading"><strong><?php echo esc_attr($regular_repayment_heading, 'loan-calculator-wp');
                            ?></strong></label>

                        </div>
                        <div class="loan-cal-desc-val">
                            <label><span><small><?php echo esc_attr($currency_symbols); ?></small><span id="per_month_amount"></span></span> <strong id="loan_amount_term_label"></strong><span id="loan_amount_year"></span></label>
                        </div>
                    </div>
                    <?php if($ww_loan_total_interest_payable != '1'){ ?>
                        <div class="loan-cal-desc">
                            <div class="loan-cal-desc-heading">
                                <label><strong><?php echo esc_attr($total_interests_payable_heading, 'loan-calculator-wp'); ?></strong></label>
                            </div>
                            <div class="loan-cal-desc-val">
                                <label><small><?php echo esc_attr($currency_symbols); ?></small><span id="total_interests_amt"></span> <?php echo esc_attr('over', 'loan-calculator-wp'); ?> <span id="total_interests_years"></span> </label>
                            </div>

                        </div>
                    <?php } ?>
                    <span id="total_interests_amt_hidden"></span>
                    <div class="loan-cal-desc" id="ballon_amt_section">
                        <div class="loan-cal-desc-heading">
                            <label><strong><?php echo esc_attr($ballon_amt_heading, 'loan-calculator-wp'); ?> (<span id="bill_ballon_per"><?php echo esc_attr(number_format($ballon_per, 2), 'loan-calculator-wp'); ?></span>%)</strong></label>
                        </div>
                        <div class="loan-cal-desc-val">
                            <label><small><?php echo esc_attr($currency_symbols); ?></small><strong><span id="bill_ballon_amt"><?php echo esc_attr(number_format(($loan_amount * $ballon_per / 100), 2), 'loan-calculator-wp'); ?></span></strong></label>
                        </div>

                    </div>

                    <?php if($down_payment_option=='1'){ ?>
                        <div class="loan-cal-desc" id="down_payment_section">
                            <div class="loan-cal-desc-heading">
                                <label><strong><?php echo esc_attr($down_payment_heading, 'loan-calculator-wp'); ?><?php if($down_payment_mode=='percentage'){ ?> (<span id="bottom_down_payment_per"></span>%)<?php } ?></strong></label>
                            </div>
                            <div class="loan-cal-desc-val">
                                <label><small><?php echo esc_attr($currency_symbols); ?></small><strong><span id="bottom_down_payment"></span></strong></label>
                            </div>

                        </div>
                    <?php } ?>

                    <?php if($extra_payment_option=='1'){ ?>
                        <div class="loan-cal-desc" id="extra_payment_section">
                            <div class="loan-cal-desc-heading">
                                <label><span><?php echo esc_attr($extra_payment_heading, 'loan-calculator-wp'); ?></span></label>
                            </div>
                            <div class="loan-cal-desc-val">
                                <label><small><?php echo esc_attr($currency_symbols, 'loan-calculator-wp'); ?></small><strong><span id="bottom_extra_payment"></span></strong> <strong id="extra_payment_loan_amount_term_label"></strong></label>
                            </div>
                        </div>
                        <?php if($hide_total_extra_payments != '1'){ ?>
                            <div class="loan-cal-desc" id="extra_payment_total_section">
                                <div class="loan-cal-desc-heading">
                                    <label><span><?php echo esc_html($extra_payment_total_label); ?></span></label>
                                </div>
                                <div class="loan-cal-desc-val">
                                    <label><small><?php echo esc_attr($currency_symbols); ?></small><strong><span id="bottom_total_extra_payment"></span></strong></label>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if($hide_save_time_extra_payments != '1'){ ?>
                            <div class="loan-cal-desc" id="extra_payment_saved_time_section">
                                <div class="loan-cal-desc-heading">
                                    <label><strong><?php echo esc_html($extra_payment_save_time_label); ?></strong></label>
                                </div>
                                <div class="loan-cal-desc-val">
                                    <label><span id="time_save_for_extra_payment"></span></label>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if($hide_save_interest_extra_payments != '1'){ ?>
                           <div class="loan-cal-desc" id="extra_payment_saved_interest_section">
                            <div class="loan-cal-desc-heading">
                                <label><strong><?php echo esc_html($extra_payment_save_interest_label); ?></strong></label>
                            </div>
                            <div class="loan-cal-desc-val">
                                <label><small><?php echo esc_attr($currency_symbols); ?></small><strong><span id="interest_save_for_extra_payment"></span></strong></label>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>

            </div>
            
            <?php if($summary_chart_option=='1'){ ?>
            
                <div class="break-up-total-payment-chart-wrap loan-detail-cal-desc">
                    <label class="summary-chart-heading"><?php echo esc_html($summary_chart_label); ?></label>
                    <canvas id="break-up-total-payment-chart" class="summary-chart-canvas" >
                </div>

            <?php } ?>
        </div>
            <?php
            $total_regular_fees_amt = round(floatval(ceil($loan_term) * 120), 2);
            $total_fees_amt = floatval($total_regular_fees_amt) + floatval($application_fee);
            ?>
            <?php if ($calculation_fee_setting_enable == 1) { ?>
                <div class="loan-detail-fee-desc">
                    <div class="loan-detail-fee-block">
                        <h5><?php echo esc_attr($application_fee_heading, 'loan-calculator-wp'); ?></h5>
                        <p><small><?php echo esc_attr($currency_symbols); ?></small><?php echo esc_attr($application_fee, 'loan-calculator-wp'); ?></p>
                    </div>
                    <div class="loan-detail-fee-block">
                        <h5><?php echo esc_attr($monthly_fee_heading, 'loan-calculator-wp'); ?></h5>
                        <p><small><?php echo esc_attr($currency_symbols); ?></small><?php echo esc_attr($monthly_rate, 'loan-calculator-wp'); ?></p>
                    </div>
                    <div class="loan-detail-fee-block">
                        <h5><?php echo esc_attr($total_regular_fees, 'loan-calculator-wp'); ?></h5>
                        <p><small><?php echo esc_attr($currency_symbols); ?></small><span id="total_regular_fee_amt"><?php echo esc_attr(round($total_regular_fees_amt, 2), 'loan-calculator-wp'); ?></span></p>
                    </div>
                    <div class="loan-detail-fee-block">
                        <h5><?php echo esc_attr($total_fees, 'loan-calculator-wp'); ?></h5>
                        <p><small><?php echo esc_attr($currency_symbols); ?></small><span id="total_fee_amt"><?php echo esc_attr($total_fees_amt, 'loan-calculator-wp'); ?></span></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php 
if ($disable_contactus_section == "") { 

 $show_contact_sec = false;
 if ($contact_type == "popup" && !empty($contact_popup_content)) { 
  $show_contact_sec = true;  
}
else if($contact_type == "link" && !empty($contact_url)){
  $show_contact_sec = true;    
}


if($show_contact_sec){    

  ?>   
  <div class="contact-us-section">
    <!-- <h3><?php echo esc_attr($contact_info_heading, 'loan-calculator-wp'); ?></h3> -->
    <?php if ($contact_type == "popup") { ?>                    
        <button class="contact-book-btn"><?php echo esc_attr($contact_popup_button_heading, 'loan-calculator-wp'); ?></button>
    <?php } else {  ?>                      
        <a href="<?php echo esc_url($contact_url); ?>" target="_blank" class="contact-btn-link"><?php echo esc_attr($contact_popup_button_heading, 'loan-calculator-wp'); ?></a>                      
    <?php } ?>
</div>

<?php 
}
}    

?>
<div class="contact-us-popup" style="display:none;">
    <div class="contact-us-popup-body">
        <a href="javascript:void(0);" class="close-button" onclick="jQuery('.contact-us-popup').hide();jQuery('body').removeClass('body-overflow-hidden');">X</a>
        <?php echo do_shortcode($contact_popup_content); ?>
    </div>
</div>


<?php if ($disable_calculator_disclaimer_section == "") { ?>
    <div class="calculator-disclaimer-section">
        <h4><?php echo wp_kses_post($calculator_disclaimer_heading, 'loan-calculator-wp'); ?></h4>
        <p><?php echo wp_kses_post($calculator_disclaimer_description, 'loan-calculator-wp'); ?></p>
    </div>
<?php } ?>
</section>
</div>