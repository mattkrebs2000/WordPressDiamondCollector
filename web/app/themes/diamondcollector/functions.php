<?php
function add_js_functions(){
?>
<script>
jQuery(document).ready(function() {
    var givenSum = 0;
    var wins = 0;
    var losses = 0;


    const changeButton = () => {
        document.getElementById("begin").innerHTML = "Play Again!";
    };

    const twoSeconds = () => {
        jQuery("#total").addClass("shadow");
    };
    const threeSeconds = () => {
        jQuery("#total").removeClass("shadow");
    };

    const twoSecondsW = () => {
        jQuery("#wins").addClass("shadow");
    };
    const threeSecondsW = () => {
        jQuery("#wins").removeClass("shadow");
    };

    const twoSecondsL = () => {
        jQuery("#losses").addClass("shadow");
    };
    const threeSecondsL = () => {
        jQuery("#losses").removeClass("shadow");
    };

    jQuery("#container2").removeClass("container2");
    jQuery("#wrapper").removeClass("wrapper");
    jQuery("#wrapper2").removeClass("wrapper2");
    jQuery("#wrapper3").removeClass("wrapper3");
    jQuery("#PurpleDiamond").addClass("imageGone");
    jQuery("#purpleDiamond").removeClass("hidden");
    jQuery("#purpleDiamond").addClass("animate");
    jQuery("#RedDiamond").addClass("imageGone");
    jQuery("#redDiamond").removeClass("hidden");
    jQuery("#redDiamond").addClass("animate");
    jQuery("#BlueDiamond").addClass("imageGone");
    jQuery("#blueDiamond").removeClass("hidden");
    jQuery("#blueDiamond").addClass("animate");
    jQuery("#GreenDiamond").addClass("imageGone");
    jQuery("#greenDiamond").removeClass("hidden");
    jQuery("#greenDiamond").addClass("animate");



    jQuery("#begin").on("click", function() {
        const middleW = () => {
            document.getElementById("wins").textContent = " " + wins;
        };

        const win = () => {
            document.getElementById("total").textContent = " " + currentTotal;
            if (givenSum === currentTotal && givenSum > 0) {
                wins = wins + 1;
                setTimeout(twoSecondsW, 1000 * 0.1);
                setTimeout(middleW, 1000 * 1);
                setTimeout(threeSecondsW, 1000 * 3);
                jQuery("#begin").removeClass("begin");
                jQuery("#lead").removeClass("margin");
                jQuery("#container2").addClass("container2");
                jQuery("#wrapper").addClass("wrapper");
                jQuery("#wrapper2").addClass("wrapper2");
                jQuery("#PurpleDiamond").addClass("imageGone");
                jQuery("#purpleDiamond").addClass("hidden");
                jQuery("#purpleDiamond").removeClass("animate");
                jQuery("#RedDiamond").addClass("imageGone");
                jQuery("#redDiamond").addClass("hidden");
                jQuery("#redDiamond").removeClass("animate");
                jQuery("#BlueDiamond").addClass("imageGone");
                jQuery("#blueDiamond").addClass("hidden");
                jQuery("#blueDiamond").removeClass("animate");
                jQuery("#GreenDiamond").addClass("imageGone");
                jQuery("#greenDiamond").addClass("hidden");
                jQuery("#greenDiamond").removeClass("animate");
                gameReset();
            }
        };

        const middleL = () => {
            document.getElementById("losses").textContent = " " + losses;
        };

        const loss = () => {
            document.getElementById("total").textContent = " " + currentTotal;
            if (currentTotal > givenSum) {
                losses = losses + 1;
                setTimeout(twoSecondsL, 1000 * 0.1);
                setTimeout(middleL, 1000 * 1);
                setTimeout(threeSecondsL, 1000 * 1.5);
                jQuery("#begin").removeClass("begin");
                jQuery("#lead").removeClass("margin");
                jQuery("#container2").addClass("container2");
                jQuery("#wrapper3").addClass("wrapper3");
                jQuery("#PurpleDiamond").addClass("imageGone");
                jQuery("#purpleDiamond").addClass("hidden");
                jQuery("#purpleDiamond").removeClass("animate");
                jQuery("#RedDiamond").addClass("imageGone");
                jQuery("#redDiamond").addClass("hidden");
                jQuery("#redDiamond").removeClass("animate");
                jQuery("#BlueDiamond").addClass("imageGone");
                jQuery("#blueDiamond").addClass("hidden");
                jQuery("#blueDiamond").removeClass("animate");
                jQuery("#GreenDiamond").addClass("imageGone");
                jQuery("#greenDiamond").addClass("hidden");
                jQuery("#greenDiamond").removeClass("animate");
                console.log("currentTotal" + currentTotal);
                console.log("givenSum" + givenSum);
                gameReset();
            }
        };

        const middle3 = () => {
            currentTotal = 0;
            document.getElementById("total").innerHTML = " " + currentTotal;
        }

        const gameReset = () => {
            redValue = 0;
            blueValue = 0;
            greenValue = 0;
            purpleValue = 0;
            setTimeout(twoSeconds, 1000 * 0.1);
            setTimeout(middle3, 1000 * 2);
            setTimeout(threeSeconds, 1000 * 2.5);
        };

        const middle = () => {
            document.getElementById("total").textContent = " " + currentTotal;
        }

        changeButton();
        win();
        loss();
        var currentTotal = 0;
        document.getElementById("total").innerHTML = currentTotal;
        jQuery("#begin").addClass("begin");
        jQuery("#lead").addClass("margin");
        jQuery("#container2").removeClass("container2");
        jQuery("#wrapper").removeClass("wrapper");
        jQuery("#wrapper2").removeClass("wrapper2");
        jQuery("#wrapper3").removeClass("wrapper3");
        jQuery("#PurpleDiamond").removeClass("imageGone");
        jQuery("#purpleDiamond").addClass("hidden");
        jQuery("#purpleDiamond").removeClass("animate");
        jQuery("#RedDiamond").removeClass("imageGone");
        jQuery("#redDiamond").addClass("hidden");
        jQuery("#redDiamond").removeClass("animate");
        jQuery("#BlueDiamond").removeClass("imageGone");
        jQuery("#blueDiamond").addClass("hidden");
        jQuery("#blueDiamond").removeClass("animate");
        jQuery("#GreenDiamond").removeClass("imageGone");
        jQuery("#greenDiamond").addClass("hidden");
        jQuery("#greenDiamond").removeClass("animate");
        document.getElementById("givenSum").textContent = " " + givenSum;
        document.getElementById("total").textContent = " " + currentTotal;
        var total = Math.floor(Math.random() * 12 + 1) + 19;
        console.log("total" + total);
        var numbersArrrayForDiamonds = [];
        for (var i = 0; i < 4; i++) {
            var newNumber = Math.floor(Math.random() * 12 + 1);
            if (!numbersArrrayForDiamonds.includes(newNumber)) {
                numbersArrrayForDiamonds.push(newNumber);
            } else {
                i--;
            }
        }
        var arrayForIndexOfNumberFindingArray = [];
        for (var j = 0; j < 4; j++) {
            var indexOfNumberFindingArray = Math.floor(Math.random() * 4 + 1);
            if (
                !arrayForIndexOfNumberFindingArray.includes(indexOfNumberFindingArray)
            ) {
                arrayForIndexOfNumberFindingArray.push(indexOfNumberFindingArray);
            } else {
                j--;
            }
        }
        var purpleMultiplier = arrayForIndexOfNumberFindingArray[0];
        var redMultiplier = arrayForIndexOfNumberFindingArray[1];
        var blueMultiplier = arrayForIndexOfNumberFindingArray[2];
        var greenMultiplier = arrayForIndexOfNumberFindingArray[3];
        var purpleValue = numbersArrrayForDiamonds[0];
        var redValue = numbersArrrayForDiamonds[1];
        var blueValue = numbersArrrayForDiamonds[2];
        var greenValue = numbersArrrayForDiamonds[3];
        var purpleProduct = purpleMultiplier * purpleValue;
        var redProduct = redMultiplier * redValue;
        var blueProduct = blueMultiplier * blueValue;
        var greenProduct = greenMultiplier * greenValue;
        givenSum = purpleProduct + redProduct + blueProduct + greenProduct;
        console.log("givenSUM" + givenSum);
        var sumLocation = document.getElementById("givenSum");
        sumLocation.textContent = " " + givenSum;

        jQuery("#PurpleDiamond").on("click", function() {
            jQuery("#begin").addClass("begin");
            jQuery("#lead").addClass("margin");
            jQuery("#PurpleDiamond").addClass("imageGone");
            jQuery("#purpleDiamond").removeClass("hidden");
            jQuery("#purpleDiamond").addClass("animate");
            console.log("purpleValue= " + purpleValue);
            currentTotal = currentTotal += purpleValue;

            setTimeout(twoSeconds, 1000 * 0.1);
            setTimeout(middle, 1000 * 1);
            setTimeout(threeSeconds, 1000 * 1.5);

            jQuery("#RedDiamond").removeClass("imageGone");
            jQuery("#redDiamond").addClass("hidden");
            jQuery("#redDiamond").removeClass("animate");
            jQuery("#BlueDiamond").removeClass("imageGone");
            jQuery("#blueDiamond").addClass("hidden");
            jQuery("#blueDiamond").removeClass("animate");
            jQuery("#GreenDiamond").removeClass("imageGone");
            jQuery("#greenDiamond").addClass("hidden");
            jQuery("#greenDiamond").removeClass("animate");
            win();
            loss();
        });

        jQuery("#RedDiamond").on("click", function() {
            jQuery("#begin").addClass("begin");
            jQuery("#lead").addClass("margin");
            jQuery("#RedDiamond").addClass("imageGone");
            jQuery("#redDiamond").removeClass("hidden");
            jQuery("#redDiamond").addClass("animate");
            currentTotal = currentTotal += redValue;

            function middle() {
                document.getElementById("total").textContent = " " + currentTotal;
            }
            setTimeout(twoSeconds, 1000 * 0.1);
            setTimeout(middle, 1000 * 1);
            setTimeout(threeSeconds, 1000 * 1.5);
            jQuery("#PurpleDiamond").removeClass("imageGone");
            jQuery("#purpleDiamond").addClass("hidden");
            jQuery("#purpleDiamond").removeClass("animate");
            jQuery("#BlueDiamond").removeClass("imageGone");
            jQuery("#blueDiamond").addClass("hidden");
            jQuery("#blueDiamond").removeClass("animate");
            jQuery("#GreenDiamond").removeClass("imageGone");
            jQuery("#greenDiamond").addClass("hidden");
            jQuery("#greenDiamond").removeClass("animate");
            win();
            loss();
        });

        jQuery("#BlueDiamond").on("click", function() {
            jQuery("#begin").addClass("begin");
            jQuery("#lead").addClass("margin");
            jQuery("#BlueDiamond").addClass("imageGone");
            jQuery("#blueDiamond").removeClass("hidden");
            jQuery("#blueDiamond").addClass("animate");
            currentTotal = currentTotal += blueValue;

            function middle() {
                document.getElementById("total").textContent = " " + currentTotal;
            }
            setTimeout(twoSeconds, 1000 * 0.1);
            setTimeout(middle, 1000 * 1);
            setTimeout(threeSeconds, 1000 * 1.5);
            jQuery("#RedDiamond").removeClass("imageGone");
            jQuery("#redDiamond").addClass("hidden");
            jQuery("#redDiamond").removeClass("animate");
            jQuery("#PurpleDiamond").removeClass("imageGone");
            jQuery("#purpleDiamond").addClass("hidden");
            jQuery("#purpleDiamond").removeClass("animate");
            jQuery("#GreenDiamond").removeClass("imageGone");
            jQuery("#greenDiamond").addClass("hidden");
            jQuery("#greenDiamond").removeClass("animate");
            win();
            loss();
        });

        jQuery("#GreenDiamond").on("click", function() {
            jQuery("#begin").addClass("begin");
            jQuery("#lead").addClass("margin");
            jQuery("#GreenDiamond").addClass("imageGone");
            jQuery("#greenDiamond").removeClass("hidden");
            jQuery("#greenDiamond").addClass("animate");
            currentTotal = currentTotal += greenValue;

            function middle() {
                document.getElementById("total").textContent = " " + currentTotal;
            }
            setTimeout(twoSeconds, 1000 * 0.1);
            setTimeout(middle, 1000 * 1);
            setTimeout(threeSeconds, 1000 * 1.5);
            jQuery("#RedDiamond").removeClass("imageGone");
            jQuery("#redDiamond").addClass("hidden");
            jQuery("#redDiamond").removeClass("animate");
            jQuery("#BlueDiamond").removeClass("imageGone");
            jQuery("#blueDiamond").addClass("hidden");
            jQuery("#blueDiamond").removeClass("animate");
            jQuery("#PurpleDiamond").removeClass("imageGone");
            jQuery("#purpleDiamond").addClass("hidden");
            jQuery("#purpleDiamond").removeClass("animate");
            win();
            loss();
        });

        jQuery("#purpleDiamond").on("click", function() {
            jQuery("#begin").addClass("begin");
            jQuery("#lead").addClass("margin");
            console.log("purpleValue= " + purpleValue);
            currentTotal = currentTotal += purpleValue;

            function middle() {
                document.getElementById("total").textContent = " " + currentTotal;
            }
            setTimeout(twoSeconds, 1000 * 0.1);
            setTimeout(middle, 1000 * 1);
            setTimeout(threeSeconds, 1000 * 1.5);
            jQuery("#RedDiamond").removeClass("imageGone");
            jQuery("#redDiamond").addClass("hidden");
            jQuery("#redDiamond").removeClass("animate");
            jQuery("#BlueDiamond").removeClass("imageGone");
            jQuery("#blueDiamond").addClass("hidden");
            jQuery("#blueDiamond").removeClass("animate");
            jQuery("#GreenDiamond").removeClass("imageGone");
            jQuery("#greenDiamond").addClass("hidden");
            jQuery("#greenDiamond").removeClass("animate");
            win();
            loss();
        });

        jQuery("#redDiamond").on("click", function() {
            jQuery("#begin").addClass("begin");
            jQuery("#lead").addClass("margin");
            currentTotal = currentTotal += redValue;

            function middle() {
                document.getElementById("total").textContent = " " + currentTotal;
            }
            setTimeout(twoSeconds, 1000 * 0.1);
            setTimeout(middle, 1000 * 1);
            setTimeout(threeSeconds, 1000 * 1.5);
            jQuery("#PurpleDiamond").removeClass("imageGone");
            jQuery("#purpleDiamond").addClass("hidden");
            jQuery("#purpleDiamond").removeClass("animate");
            jQuery("#BlueDiamond").removeClass("imageGone");
            jQuery("#blueDiamond").addClass("hidden");
            jQuery("#blueDiamond").removeClass("animate");
            jQuery("#GreenDiamond").removeClass("imageGone");
            jQuery("#greenDiamond").addClass("hidden");
            jQuery("#greenDiamond").removeClass("animate");
            win();
            loss();
        });

        jQuery("#blueDiamond").on("click", function() {
            jQuery("#begin").addClass("begin");
            jQuery("#lead").addClass("margin");
            currentTotal = currentTotal += blueValue;

            function middle() {
                document.getElementById("total").textContent = " " + currentTotal;
            }
            setTimeout(twoSeconds, 1000 * 0.1);
            setTimeout(middle, 1000 * 1);
            setTimeout(threeSeconds, 1000 * 1.5);
            jQuery("#RedDiamond").removeClass("imageGone");
            jQuery("#redDiamond").addClass("hidden");
            jQuery("#redDiamond").removeClass("animate");
            jQuery("#PurpleDiamond").removeClass("imageGone");
            jQuery("#purpleDiamond").addClass("hidden");
            jQuery("#purpleDiamond").removeClass("animate");
            jQuery("#GreenDiamond").removeClass("imageGone");
            jQuery("#greenDiamond").addClass("hidden");
            jQuery("#greenDiamond").removeClass("animate");
            win();
            loss();
        });

        jQuery("#greenDiamond").on("click", function() {
            jQuery("#begin").addClass("begin");
            jQuery("#lead").addClass("margin");
            currentTotal = currentTotal += greenValue;

            function middle() {
                document.getElementById("total").textContent = " " + currentTotal;
            }
            setTimeout(twoSeconds, 1000 * 0.1);
            setTimeout(middle, 1000 * 1);
            setTimeout(threeSeconds, 1000 * 1.5);
            jQuery("#RedDiamond").removeClass("imageGone");
            jQuery("#redDiamond").addClass("hidden");
            jQuery("#redDiamond").removeClass("animate");
            jQuery("#BlueDiamond").removeClass("imageGone");
            jQuery("#blueDiamond").addClass("hidden");
            jQuery("#blueDiamond").removeClass("animate");
            jQuery("#PurpleDiamond").removeClass("imageGone");
            jQuery("#purpleDiamond").addClass("hidden");
            jQuery("#purpleDiamond").removeClass("animate");
            win();
            loss();
        });

        jQuery("#return").on("click", function() {
            jQuery("#begin").addClass("begin");
            jQuery("#lead").addClass("margin");
            jQuery("#container2").removeClass("container2");
            jQuery("#wrapper").removeClass("wrapper");
            jQuery("#wrapper2").removeClass("wrapper2");
            jQuery("#wrapper3").removeClass("wrapper3");
            if (returns > 0) {
                returns = returns - 1;
                currentTotal = 0;
            } else {
                alert("You have no more returns!");
            }
            document.getElementById("returns").innerHTML = returns;
            document.getElementById("total").innerHTML = " " + currentTotal;
            jQuery("#PurpleDiamond").removeClass("imageGone");
            jQuery("#purpleDiamond").addClass("hidden");
            jQuery("#purpleDiamond").removeClass("animate");
            jQuery("#RedDiamond").removeClass("imageGone");
            jQuery("#redDiamond").addClass("hidden");
            jQuery("#redDiamond").removeClass("animate");
            jQuery("#BlueDiamond").removeClass("imageGone");
            jQuery("#blueDiamond").addClass("hidden");
            jQuery("#blueDiamond").removeClass("animate");
            jQuery("#GreenDiamond").removeClass("imageGone");
            jQuery("#greenDiamond").addClass("hidden");
            jQuery("#greenDiamond").removeClass("animate");
        });

    });

});
</script>
<?php
}
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');
add_action('wp_head','add_js_functions');