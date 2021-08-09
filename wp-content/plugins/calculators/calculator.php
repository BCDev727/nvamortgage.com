<?php
/**
* Plugin Name: Calculator 
* Plugin URI: https://www.Calculator.com/
* Description: Calculator
* Version: 1.0
* Author: Calculator
* Author URI: http://Calculator.com/
**/



/**
 * 
 * First Calculator
 * 
 */
add_shortcode( 'mortgage_amortization_calculator​', 'wp_mortgage_amortization_calculator​​' );

function wp_mortgage_amortization_calculator​​() {

    ?>
    
    <div class="mortgage_amortization_calculator​">
        <div class="result">
            <h1>Your total monthly payment is <span class="total_monthly1"></span> <a href="#mortgage_calc">[Detail]</a></h1>
        </div>
        <form action="" method="post">
    
            <table class="calculator_form">
                <tr>
                    <td>Home Sale Price:</td>
                    <td><input type="text" size=10 name="homesaleprice" id="home_sale_price" value="650000"> (dollars)</td>
                </tr>
                <tr>
                    <td>Down Payment in Percentage:</td>
                    <td><input type="text" size=5 name="downpaymentinpercentage" id="down_payment_in_percentage" value="3"> %</td>
                </tr>
                <tr>
                    <td>Interest Rate:</td>
                    <td><input type="text" size=5 name="interestrate" id="interest_rate" value="2.8"> %</td>
                </tr>
                <tr>
                    <td>Mortgage Term:</td>
                    <td><input type="text" size=3 name="mortgageterm" id="mortgage_term" value="30"> years</td>
                </tr>
                <tr>
                    <td>Assessed Home Value:</td>
                    <td><input type="text" size=10 name="assessedhomevalue" id="assessed_home_value" value> (dollars) <br>
                        <span>The assessed value is used to compute property taxes. On average, properties are assessed at about 85% of their selling price. If you know the actual assessed value for this property, enter it here. If not, <strong>leave zero and we'll use 85% of the sale price.</strong></span>
                    </td>
                </tr>
                <tr>
                    <td>Property Tax Rate:</td>
                    <td><input type="text" size=3 name="propertytaxrate:" id="property_tax_rate" value=11.5> (dollars per $1000) <br>
                        <span>Property tax rates vary between states and towns. The US average is about $13.80 for every $1000 of the assessed home value.</span>
                    </td>
                </tr>
                <tr>
                    <td>Condo/Monthly Fee(s):</td>
                    <td><input type="text" size=3 name="monthlyfee:" id="monthly_fee" value=0> (dollars)</td>
                </tr>
                <tr>
                    <td>Explain Calculations:</td>
                    <td>
                        <input type="checkbox"  name="explain" id="explain" checked>
                        <label for="explain">Show the calculations and amortization</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="button" value="Calculate" id="mortgage_calc_btn"></td>
                </tr>
            </table>

            <div class="result mortgage_calc" id="mortgage_calc">
                <div class="title">
                    <h5>Mortgage Payment Information</h5>
                </div>
                <table class="result_table">
                    <tr>
                        <td>Down Payment:</td>
                        <td class="calculate_result1"></td>
                    </tr>
                    <tr>
                        <td>Amount Financed</td>
                        <td class="calculate_result2"></td>
                    </tr>
                    <tr>
                        <td>Monthly Payment</td>
                        <td class="calculate_result3"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:left;">If you put less than 20% as a down payment, you'll pay Private Mortgage Insurance. PMI tends to be about $55/month for every $100,000 financed until you have paid off 20% of your loan. This adds <span class="extra_charges"></span> to your monthly payment.</td>
                    </tr>
                    <tr>
                        <td colspan="2"  style="text-align:left;">Your property tax rate is <span class="tax_rat"></span> for every $1,000 of your property's assessed value, which is <span class="assessed"></span>. This would mean that your yearly property taxes will be around <span class="year_tax"></span> , and will add <span class="montly_tax"></span> to your monthly payment.</td>
                    </tr>
                </table>
            </div>
            
        </form>

        <div class="result total_payment">
            <h2>Your Total Monthly Payment</h2>
            <table>
                <tr>
                    <td>Mortgage (Principal & Interest)</td>
                    <td class="total_monthly"></td>
                </tr>
                <tr>
                    <td>PMI</td>
                    <td class="total_pmi"></td>
                </tr>
                <tr>
                    <td>Property Tax</td>
                    <td class="total_tax"></td>
                </tr>
                <tr>
                    <td>Condo Fee</td>
                    <td class="total_fee"></td>
                </tr>
                <tr>
                    <td>Total Monthly Payment</td>
                    <td class="total_pay"></td>
                </tr>
            </table>
        </div>

        <div class="result calculations">
            <h2>Calculations</h2>
            <p>To figure out the monthly payment, we need to know (1) how much you're financing; (2) your monthly interest rate; and (3) how many months you're financing for.</p>

            <h3>1. Financing Amount</h3>
            <div class="financing_amount">

                
                <p>First, we need to figure how much you're financing.</p>
                <p>We can do this based on the sale price of the home ( $<span class="home_sale_price"></span> ) and the percent that you put down ( <span class="down_payment_per"></span>% ).</p>
                <p>Start by calculating the down payment. Divide the percentage down by 100, then multiply by the sale price of the home.</p>
                <p>(<span class="down_payment_per"></span>% / <strong>100</strong> ) x $<span class="home_sale_price"></span> = $<span class="down_payment"></span>, your down payment</p>
                <p>Now we can calculate how much you're financing—how much you need to borrow. That's just the sale price minus your down payment.</p>
                <p>$<span class="home_sale_price"></span> - $<span class="down_payment"></span> = $<span class="finance_payment"></span>, your financing price</p>

            </div>

            <h3>2. Monthly Interest Rate</h3>
            <div class="monthly_intrest_rate">

                <p>That <span class="monthly_rate"></span>% interest rate percentage you secured is an annual percent.</p>

                <p>We'll need to convert that from a percentage to a decimal rate, and from an annual representation to a monthly one.</p>

                <p>First, let's convert it to a decimal, by dividing the percent by 100.</p>

                <p><span class="monthly_rate"></span>% / 100 = <span class="monthly_rate_calculated"></span>, the annual interest rate</p>

                <p>Now convert the annual rate to a monthly rate by dividing by 12 (for 12 months in a year).</p>

                <p><span class="monthly_rate_calculated"></span> / 12 = <span class="monthly_rate_calculated2"></span>, your monthly interest rate</p>

            </div>


            <h3>3. Month Term</h3>
            <div class="month_term">

                <p>That's just the number of months you'll be paying off your loan.</p>

                <p>You have a <span class="term_yers_c"></span> year mortgage x 12 months = <span class="term_month_c"></span> months, your month term.</p>

            </div>

            <h3>4. Your Monthly Mortgage Payment</h3>
            <div class="month_term">

                <p>Using the three numbers above, we can now calculate your monthly payment.</p>

                <p>(financing price) x (monthly interest rate / (1 - ((1+monthly interest rate) <sup>-(monthly term)</sup> )))</p>

                <p><span class="finance_payment"></span> x (<span class="monthly_rate_calculated2"></span> / (1 - ((1 + <span class="monthly_rate_calculated2"></span>) <sup>-( <span class="term_month_c"></span> )</sup> ))) = $<span class="total_monthly"></span>, your monthly payment*</p>

                <p>*Principal & Interest only. See total monthly payment for a your mortgage plus taxes, insurance, and fees. See amortization for a breakdown of how each monthly payment is split between the bank's interest and paying off the loan principal.</p>

            </div>

        </div>
        <div>
            <table class="amortization">
                
            </table>
        </div>
    </div>

    <script>
        jQuery(document).ready(function(){
            var home_sale_price = parseFloat(jQuery("#home_sale_price").val());
            var val_85 = ( home_sale_price * 85 ) / 100;
            jQuery("#assessed_home_value").val(val_85);
        });


        jQuery("#mortgage_calc_btn").click(function(){
            var home_sale_price = parseFloat(jQuery("#home_sale_price").val());
            var down_payment_in_percentage = parseFloat(jQuery("#down_payment_in_percentage").val());
            var interest_rate = parseFloat(jQuery("#interest_rate").val());
            var term_year = parseFloat(jQuery("#mortgage_term").val());
            var assessed_home_value = parseFloat(jQuery("#assessed_home_value").val());
            var property_tax_rate = parseFloat(jQuery("#property_tax_rate").val());
            var monthly_fee = parseFloat(jQuery("#monthly_fee").val());

            var checked = jQuery("#explain:checked").length;

            if (checked == 0) {
                jQuery(".total_payment").css('display','none');
                jQuery(".calculations").css('display','none');
                jQuery(".amortization").css('display','none');
            } else {
                
                jQuery(".total_payment").css('display','block');
                jQuery(".calculations").css('display','block');
                jQuery(".amortization").css('display','block');
            
            var val_85 = ( home_sale_price * 85 ) / 100;
            jQuery("#assessed_home_value").val(val_85);

            var down_payment = (home_sale_price * down_payment_in_percentage) / 100;
            var finance_amount = home_sale_price - down_payment;


            // monthly intrest rate
            var monthly_intrest = interest_rate / 100;
            monthly_intrest = monthly_intrest / 12;

            // monthly term
            monthly_term = term_year * 12;

            // Monthly motrage payment
            var flag1 = Math.pow(1 + monthly_intrest,-monthly_term);
            // 
            var monthly_motrage_payment = (finance_amount) * ( monthly_intrest / ( 1 - flag1) );
            monthly_motrage_payment = monthly_motrage_payment.toFixed(2);



            // if Down payment is <20%
            var my_amount = finance_amount;  
            var add_charge = 0;
            if(down_payment_in_percentage < 20){
                while(my_amount){
                    if(my_amount >= 100000){
                        add_charge = add_charge + 55;
                        my_amount = my_amount - 100000;
                        
                    }else{
                        var finance_per = ( my_amount * 100 ) / 100000;
                        var charge_add = ( 55 * finance_per ) / 100;
                        var add_charge = add_charge + charge_add;
                        my_amount = 0;
                    }
                }
            }
            extra_charges = add_charge.toFixed(2);

            // Tax rate calculation
            var yearly_tax_rate = (assessed_home_value / 1000) * property_tax_rate; 
            var month_tax_rate = yearly_tax_rate / 12;
            yearly_tax_rate = yearly_tax_rate.toFixed(2);
            month_tax_rate = month_tax_rate.toFixed(2);
            jQuery(".mortgage_calc .tax_rat").empty();
            jQuery(".mortgage_calc .tax_rat").append("<strong>"+ property_tax_rate +"</strong>");
            jQuery(".mortgage_calc .assessed").empty();
            jQuery(".mortgage_calc .assessed").append("<strong>"+ assessed_home_value +"</strong>");
            jQuery(".mortgage_calc .year_tax").empty();
            jQuery(".mortgage_calc .year_tax").append("<strong>"+ yearly_tax_rate +"</strong>");
            jQuery(".mortgage_calc .montly_tax").empty();
            jQuery(".mortgage_calc .montly_tax").append("<strong>"+ month_tax_rate +"</strong>");


            jQuery(".total_payment .total_monthly").empty();
            jQuery(".total_payment .total_monthly").append("<strong>$ "+ monthly_motrage_payment +"</strong>");

            jQuery(".total_payment .total_pmi").empty();
            jQuery(".total_payment .total_pmi").append("<strong>$ "+ extra_charges +"</strong>");

            jQuery(".total_payment .total_tax").empty();
            jQuery(".total_payment .total_tax").append("<strong>$ "+ month_tax_rate +"</strong>");

            jQuery(".total_payment .total_fee").empty();
            jQuery(".total_payment .total_fee").append("<strong>$ "+ monthly_fee +"</strong>");
            var net_amount = parseFloat(monthly_motrage_payment) + parseFloat(extra_charges) + parseFloat(month_tax_rate) + parseFloat(monthly_fee) ;
            total_pay = net_amount.toFixed(2);

            jQuery(".total_payment .total_pay").empty();
            jQuery(".total_payment .total_pay").append("<strong>$ "+ total_pay +"</strong>");


            // calculation
            jQuery(".calculations p .home_sale_price").empty();
            jQuery(".calculations p .home_sale_price").append("<strong>"+ home_sale_price +"</strong>");

            jQuery(".calculations p .down_payment_per").empty();
            jQuery(".calculations p .down_payment_per").append("<strong>"+ down_payment_in_percentage +"</strong>");

            jQuery(".calculations p .down_payment").empty();
            jQuery(".calculations p .down_payment").append("<strong>"+ down_payment +"</strong>");

            jQuery(".calculations p .finance_payment").empty();
            jQuery(".calculations p .finance_payment").append("<strong>"+ finance_amount +"</strong>");

            // Monthly motrage payment
            jQuery(".calculations p .monthly_rate").empty();
            jQuery(".calculations p .monthly_rate").append("<strong>"+ interest_rate +"</strong>");
            monthly_intrest = interest_rate / 100;
            monthly_intrest = monthly_intrest.toFixed(3);
            jQuery(".calculations p .monthly_rate_calculated").empty();
            jQuery(".calculations p .monthly_rate_calculated").append("<strong>"+ monthly_intrest +"</strong>");
            monthly_intrest = monthly_intrest / 12;
            monthly_intrest = monthly_intrest.toFixed(4);
            jQuery(".calculations p .monthly_rate_calculated2").empty();
            jQuery(".calculations p .monthly_rate_calculated2").append("<strong>"+ monthly_intrest +"</strong>");

            // month_term
            jQuery(".calculations p .term_yers_c").empty();
            jQuery(".calculations p .term_yers_c").append("<strong>"+ term_year +"</strong>");

            jQuery(".calculations p .term_month_c").empty();
            jQuery(".calculations p .term_month_c").append("<strong>"+ monthly_term +"</strong>");

            jQuery(".calculations p .total_monthly").empty();
            jQuery(".calculations p .total_monthly").append("<strong>"+ monthly_motrage_payment +"</strong>");

            for(var i=1;i<3;i++){
                jQuery("#calculate_result"+i).empty();
            }

            jQuery(".mortgage_calc .calculate_result1").empty();
            jQuery(".mortgage_calc .calculate_result2").empty();
            jQuery(".mortgage_calc .calculate_result3").empty();
            jQuery(".mortgage_calc .calculate_result1").append("<strong>$"+ down_payment +"</strong>");
            jQuery(".mortgage_calc .calculate_result2").append("<strong>$"+ finance_amount +"</strong>");
            jQuery(".mortgage_calc .calculate_result3").append("<strong>$"+ monthly_motrage_payment +" (Principal & Interest ONLY)</strong>");
            jQuery(".mortgage_calc .extra_charges").empty();
            jQuery(".mortgage_calc .extra_charges").append("<strong>$"+ extra_charges +"</strong>");
            jQuery(".total_monthly1").empty();
            jQuery(".total_monthly1").append("<strong>$"+ total_pay +"</strong>");


            var count = 0;
            var InterestPaid = (finance_amount * interest_rate) / (12 * 100);
            var PrincipalPaid = 0;
            var RemainingBalance = 0;
            
            var monthly_intrest = interest_rate / 100;
            monthly_intrest = monthly_intrest / 12;

            // monthly term
            monthly_term = term_year * 12;

            // Monthly motrage payment
            var flag1 = Math.pow(1 + monthly_intrest,-monthly_term);
            // 
            var monthly_motrage_payment = (finance_amount) * ( monthly_intrest / ( 1 - flag1) );
            var summary = monthly_motrage_payment * 12;

            var total_principal_paid = 0;
            var total_interest_paid = 0;

            var total_principal_and_interest_costs = 0;

            var summary_count = 0;
            var summary_count_last = 0;
            if(jQuery(".amortization").empty()) {
                for (var i = 1; i <= monthly_term; i++) {
                    count++;
                    
                    if (RemainingBalance) {
                        if (count == 12) {
                            summary_count++;
                            summary_count_last = 1 + summary_count;
                            jQuery(".amortization").append("" +
                                "<tr>" +
                                "<td colspan='5'><strong>Year " + summary_count + " Summary:</strong><span class='coaching'> You spent $" + summary.toFixed(2) + " </span>" +
                                "<p>" +
                                "$" + total_principal_paid.toFixed(2) + " went to principal <span class='coaching'>This is equity that your building up</span><br>" +
                                "$" + total_interest_paid.toFixed(2) + " went to interest <span class='coaching'>This is typically tax deductible</span>" +
                                "</p>" +
                                "</td> " +
                                "</tr>" +
                                "");
                                jQuery(".amortization").append("" +
                                "<tr>" +
                                "<th>Month</th>" +
                                "<th>Interest Paid</th>" +
                                "<th>Principal Paid</th>" +
                                "<th>Remaining Balance</th>" +
                                "</tr>" +
                                "");
                            count = 0;
                            total_principal_paid = 0;
                            total_interest_paid = 0;
                        }
                        InterestPaid = (RemainingBalance * interest_rate) / (12 * 100);
                        total_principal_and_interest_costs = total_principal_and_interest_costs + InterestPaid;
                    } 
                    
                    else {
                        jQuery(".amortization").append("" +
                            "<tr>" +
                            "<th>Month</th>" +
                            "<th>Interest Paid</th>" +
                            "<th>Principal Paid</th>" +
                            "<th>Remaining Balance</th>" +
                            "</tr>" +
                            "");
                        count = 0;
                        InterestPaid = (finance_amount * interest_rate) / (12 * 100);
                        RemainingBalance = parseFloat(finance_amount);
                        total_principal_and_interest_costs = total_principal_and_interest_costs + InterestPaid;
                    }

                    PrincipalPaid = parseFloat(monthly_motrage_payment) - parseFloat(InterestPaid);
                    // console.log(monthly_motrage_payment);
                    total_principal_paid = total_principal_paid + PrincipalPaid;
                    total_interest_paid = total_interest_paid + InterestPaid;
                    RemainingBalance = parseFloat(RemainingBalance) - parseFloat(PrincipalPaid);
                    total_principal_and_interest_costs = total_principal_and_interest_costs + PrincipalPaid;


                    jQuery(".amortization").append("" +
                        "<tr>" +
                        "<td>" + i + "</th>" +
                        "<td>$" + InterestPaid.toFixed(2) + "</td>" +
                        "<td>$" + PrincipalPaid.toFixed(2) + "</td>" +
                        "<td>$" + RemainingBalance.toFixed(2) + "</td>" +
                        "</tr>" +
                        "");
                    
                }
                jQuery(".amortization").append("" +
                                "<tr>" +
                                "<td colspan='4'><strong>Year " + summary_count_last + " Summary:</strong><span class='coaching'> You spent $" + summary.toFixed(2) + " </span>" +
                                "<p>" +
                                "$" + total_principal_paid.toFixed(2) + " went to principal <span class='coaching'>This is equity that your building up</span><br>" +
                                "$" + total_interest_paid.toFixed(2) + " went to interest <span class='coaching'>This is typically tax deductible</span>" +
                                "</p>" +
                                "</td> " +
                                "</tr>" +
                                "");
                jQuery(".amortization").append("" +
                                "<tr>" +
                                "<td colspan='4'><span>Principal & interest costs for the full "+ parseFloat(jQuery("#mortgage_term").val()) +" years of this mortgage total…</span>" +
                                "<p> " +
                                "$" + total_principal_and_interest_costs.toFixed(2) +
                                "</p>" +
                                "</td> " +
                                "</tr>" +
                                "");
        }
            jQuery(".result").css("display","block");

            }
        });

    </script>

    <?php
    
}



/**
 * 
 * Second Calculator
 * 
 */
add_shortcode( 'mortgage_payment_calculator​', 'wp_mortgage_payment_calculator​' );

function wp_mortgage_payment_calculator​() {

    ?>
    
    <div class="mortgage_payment_calculator">
        <form action="" method="post">

            <table class="calculator_form calculator">
                <tr>
                    <td>Amount Financed:</td>
                    <td><input type="text" name="amountfinanced" id="amount_financed" value=630000> $</td>
                </tr>
                <tr>
                    <td>Interest rate:</td>
                    <td><input type="text" name="Interestrate" id="interest_rate" value=2.8> %</td>
                </tr>
                <tr>
                    <td>Loan term:</td>
                    <td><input type="text" name="Loanterm" id="loan_term" value=30> years</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="button" value="Calculate" id="calc_btn"></td>
                </tr>
            </table>

            <div class="result">
                <div class="title">
                    <h5>Mortgage Payment Information</h5>
                </div>
                <table class="result_table">
                    <tr>
                        <td>Monthly payment (principal & interest ONLY):</td>
                        <td class="calculate_result1"></td>
                    </tr>
                    <tr>
                        <td>Total interest:</td>
                        <td class="calculate_result2"></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>

    <script>

        jQuery("#calc_btn").click(function(){
            var Amount = parseFloat(jQuery("#amount_financed").val());
            var Interest_pre = parseFloat(jQuery("#interest_rate").val());
            var Loan_term = parseFloat(jQuery("#loan_term").val());
            
            var n = 12;

            var r = Interest_pre/100;    
            var power_for = n * Loan_term;
            var for_power = (1 + r / n );
            var power = Math.pow(for_power, power_for);

            // Monthly interest
            var total = [Amount * ( r / n ) *  power] / [ power - 1 ];
            var total = total.toFixed(2);

            // Total Intrest
            var total_cost = power_for * total;
            var total_interest = total_cost - Amount;
            var total_interest = total_interest.toFixed(2);

            

            jQuery(".calculate_result1").empty();
            jQuery(".calculate_result2").empty();
            jQuery(".calculate_result1").append("<strong>$ "+total+"</strong>");
            jQuery(".calculate_result2").append("<strong>$ "+total_interest+"</strong>");
            jQuery(".result").css("display","block");
            
            // [P * (r/n) * (1 + r/n )^n(t) ] / [ (1 + r/n )^n(t) -1 ]
            


        });

    </script>

    <?php
    
}

/**
 * 
 * Third Calculator
 * 
 */
add_shortcode( 'APR_calculator​', 'wp_APR_calculator​' );

function wp_APR_calculator​() {

    ?>
    
    <div class="APR_calculator​">
        <form action="" method="post">

            <table class="calculator_form calculator">
                <tr>
                    <td>Loan Amount:</td>
                    <td><input type="text" name="LoanAmount" id="loan_amount" value=635000> $</td>
                </tr>
                <tr>
                    <td>Interest rate:</td>
                    <td><input type="text" name="Interestrate" id="interest_rate" value=2.8> %</td>
                </tr>
                <tr>
                    <td>Loan term:</td>
                    <td><input type="text" name="Loanterm" id="loan_term" value=30> years</td>
                </tr>
                <tr>
                    <td>Points:</td>
                    <td><input type="text" name="Points" id="points" value=1></td>
                </tr>
                <tr>
                    <td>Other Costs:</td>
                    <td><input type="text" name="OtherCosts" id="other_costs" value=1050> $</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="button" value="Calculate" id="apr_calc_btn"></td>
                </tr>
            </table>

            <div class="result apr_result">
                <div class="title">
                    <h5>APR Payment Information</h5>
                </div>
                <table class="result_table">
                    <tr>
                        <td>Stated Loan Amount (Monthly Payment)</td>
                        <td class="calculate_result1"></td>
                    </tr>
                    <tr>
                        <td>Effective Loan Amount (Monthly Payment)</td>
                        <td class="calculate_result2"></td>
                    </tr>
                    <tr>
                        <td>Annual Percentage Rate (APR)</td>
                        <td class="calculate_result3"></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>

    <script>

        jQuery("#apr_calc_btn").click(function(){
            var Amount = parseFloat(jQuery("#loan_amount").val());
            var Interest = parseFloat(jQuery("#interest_rate").val());
            var Loan_term = parseFloat(jQuery("#loan_term").val());
            var point = parseFloat(jQuery("#points").val());
            var other_cost = parseFloat(jQuery("#other_costs").val());
            

            
            // P * [ r * (1 + r) * n ] / [ (1 + r) * n - 1 ]

            var p = Amount;
            var r = (Interest / 12) / 100;
            var n = Loan_term * 12;

            var flag = Math.pow(1 + r, n);

            var total_stated = [p * ( r * flag )] / [ flag - 1 ];
            total_stated = total_stated.toFixed(2);

            p = p + other_cost;
            var total_effective = [p * ( r * flag )] / [ flag - 1 ];
            total_effective = total_effective.toFixed(2);

            var point_intrest = (Amount * point) / 100;
            intrest_point_val = Amount + point_intrest;

            // Amount = Amount + intrest_point_val;

            
            // annual percentence 
            var n_days = Loan_term * 365;
            var n_month = Loan_term * 12;
            var a_intrest = ( Amount * Interest ) / 100;
            //alert(n_days);
            //alert(a_intrest);

            // if(other_cost == 0){
            //     var annual_per = Interest;
            //     annual_per = annual_per.toFixed(2);
            // }else{
            //     apr = (((( Amount * Interest * Loan_term ) / 100 ) + other_cost) / ( Amount * Loan_term )) * 100;
            //     annual_per = apr.toFixed(2);
            // }
            
            var mypoints = point / 100;
            new_intrest_point_val = mypoints * Amount;

            // console.log('points value = '+ new_intrest_point_val);

            var new_amount = Amount + new_intrest_point_val + other_cost;

            // console.log('new amount = '+ new_amount);

            var paid_to_bank = ( new_amount * ( 1 + (Interest / 100) * Loan_term ) );

            // console.log('new amount = '+ paid_to_bank);

            var tota_fee = paid_to_bank - Amount;

            var annual_per = ( tota_fee / Amount / Loan_term ) * 100;
            annual_per = annual_per.toFixed(2);

            jQuery(".apr_result .calculate_result1").empty();
            jQuery(".apr_result .calculate_result2").empty();
            jQuery(".apr_result .calculate_result3").empty();
            jQuery(".apr_result .calculate_result1").append("<strong>$"+total_stated+"</strong>");
            jQuery(".apr_result .calculate_result2").append("<strong>$"+total_effective+"</strong>");
            jQuery(".apr_result .calculate_result3").append("<strong>"+annual_per+"%</strong>");
            jQuery(".result").css("display","block");
        });

    </script>

    <?php
    
}



/**
 * 
 * forth Calculator
 * 
 */
add_shortcode( 'Refinance_calculator​', 'wp_refinance_calculator​' );

function wp_refinance_calculator​() {

    ?>
    
    <div class="Refinance_calculator​">
        <form action="" method="post">

            <table class="calculator_form calculator">
                <tr>
                    <td>Original Interest Rate:</td>
                    <td><input type="text" name="Interest" id="interest_rate" value="4.5"> %</td>
                </tr>
                <tr>
                    <td>Original Loan Amount:</td>
                    <td><input type="text" name="loanamount" id="loan_amount" value="600000"> %</td>
                </tr>
                <tr>
                    <td>Original Loan term:</td>
                    <td><input type="text" name="Loanterm" id="loan_term" value="30"> years</td>
                </tr>
                <tr>
                    <td>Time Left to Pay on Original Loan:</td>
                    <td><input type="text" name="timeloanterm" id="time_loan_term" value="264"> months</td>
                </tr>
                <tr>
                    <td>New Interest Rate:</td>
                    <td><input type="text" name="newinterestrate" id="new_interest_rate" value="2.8"> %</td>
                </tr>
                <tr>
                    <td>New Loan Amount:</td>
                    <td><input type="text" name="newloanamount" id="new_loan_amount" value="493500"> $</td>
                </tr>
                <tr>
                    <td>New Loan term:</td>
                    <td><input type="text" name="newLoanterm" id="new_loan_term" value="20"> years</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="button" value="Calculate" id="refinance_calc_btn"></td>
                </tr>
            </table>

            <div class="result refinance_result">
                <div class="title">
                    <h5>Refinance Payment Information</h5>
                </div>
                <h5>Old Loan</h5>
                <table class="result_table1">
                    <tr>
                        <td>Monthly Payment</td>
                        <td class="calculate_result1"></td>
                    </tr>
                    <tr>
                        <td>Remaining Principle Balance</td>
                        <td class="calculate_result2"></td>
                    </tr>
                    <tr>
                        <td>Left to be Paid</td>
                        <td class="calculate_result3"></td>
                    </tr>
                </table>
                <h5>New Loan</h5>
                <table class="result_table2">
                    <tr>
                        <td>Monthly Payment</td>
                        <td class="calculate_result1"></td>
                    </tr>
                    
                    <tr>
                        <td>Total Cost</td>
                        <td class="calculate_result2"></td>
                    </tr>
                </table>
                <h5>Total Savings</h5>
                <table class="result_table3">
                    <tr>
                        <td>Savings</td>
                        <td class="calculate_result1"></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>

    <script>
        var monthly = 0;
        jQuery(document).ready(function(){
            
            var interest = parseFloat(jQuery("#interest_rate").val());
            var loan = parseFloat(jQuery("#loan_amount").val());
            var term = parseFloat(jQuery("#loan_term").val());
            var time_loan = parseFloat(jQuery("#time_loan_term").val());

            // Rate calculation
            var intrest_rate = ( interest / 100 ) / 12;

            // total months
            var total_month = term * 12;

            // monthly payment
            var power_amount = Math.pow( 1 + intrest_rate , total_month );
            var pay = loan * [ intrest_rate * power_amount ] / [ power_amount - 1 ];

            // new loan amount
            var time_left = total_month - time_loan;
            var power_new = Math.pow( 1 + intrest_rate , time_left);
            var new_amount = ( pay + ( power_new ) * ( intrest_rate  * loan - pay ) ) / intrest_rate;
            new_amount = new_amount.toFixed(2);
            jQuery("#new_loan_amount").val(new_amount);

            // term_yers
            var term_year = time_loan / 12;
            jQuery("#new_loan_term").val(term_year);
        });

        jQuery("#refinance_calc_btn").click(function(){
            var interest = parseFloat(jQuery("#interest_rate").val());
            var loan = parseFloat(jQuery("#loan_amount").val());
            var term = parseFloat(jQuery("#loan_term").val());
            var time_loan = parseFloat(jQuery("#time_loan_term").val());
            var new_interest = parseFloat(jQuery("#new_interest_rate").val());
            var new_loan = parseFloat(jQuery("#new_loan_amount").val());
            var new_term = parseFloat(jQuery("#new_loan_term").val());

            // Original calculation

                // Rate calculation
                var intrest_rate = ( interest / 100 ) / 12;

                // total months
                var total_month = term * 12;

                // monthly payment
                var power_amount = Math.pow( 1 + intrest_rate , total_month );
                var pay = loan * [ intrest_rate * power_amount ] / [ power_amount - 1 ];
                monthly = pay;
                


                var time_left = total_month - time_loan;
                var power_new = Math.pow( 1 + intrest_rate , time_left);
                var new_amount = ( pay + ( power_new ) * ( intrest_rate  * loan - pay ) ) / intrest_rate;
                new_amount = new_amount.toFixed(2);
                jQuery("#new_loan_amount").val(new_amount);
                pay = pay.toFixed(2);

                // term_yers
                var term_year = time_loan / 12;
                jQuery("#new_loan_term").val(term_year);

                // Remaining Months
                var ramaining_balance = pay * time_loan;
                ramaining_balance = ramaining_balance.toFixed(2);
                var total_cost = pay * total_month;
                

            // new calculation

                // Rate calculation
                var new_intrest_rate = ( new_interest / 100 ) / 12;

                // total months
                var new_total_month = new_term * 12;

                // monthly payment
                var new_power_amount = Math.pow( 1 + new_intrest_rate , new_total_month );
                var new_pay = new_loan * [ new_intrest_rate * new_power_amount ] / [ new_power_amount - 1 ];
                new_pay = new_pay.toFixed(2);

                // Remaining Months
                var new_ramaining_balance = new_pay * new_total_month;

                var saving = total_cost - new_ramaining_balance;

                total_cost = total_cost.toFixed(2);
                saving = saving.toFixed(2);
                new_ramaining_balance = new_ramaining_balance.toFixed(2);



                jQuery(".refinance_result .result_table1 .calculate_result1").empty();
                jQuery(".refinance_result .result_table1 .calculate_result2").empty();
                jQuery(".refinance_result .result_table1 .calculate_result3").empty();
                jQuery(".refinance_result .result_table1 .calculate_result1").append("<strong>$ "+pay+"</strong>");
                jQuery(".refinance_result .result_table1 .calculate_result3").append("<strong>$ "+ramaining_balance+"</strong>");
                jQuery(".refinance_result .result_table1 .calculate_result2").append("<strong>$ "+new_amount+"</strong>");

                jQuery(".refinance_result .result_table2 .calculate_result1").empty();
                jQuery(".refinance_result .result_table2 .calculate_result2").empty();
                jQuery(".refinance_result .result_table2 .calculate_result1").append("<strong>$ "+new_pay+"</strong>");
                jQuery(".refinance_result .result_table2 .calculate_result2").append("<strong>$ "+new_ramaining_balance+"</strong>");

                jQuery(".refinance_result .result_table3 .calculate_result1").empty();
                jQuery(".refinance_result .result_table3 .calculate_result1").append("<strong>$ "+saving+"</strong>");

                jQuery(".result").css("display","block");
            
        });

    </script>

    <?php
    
}