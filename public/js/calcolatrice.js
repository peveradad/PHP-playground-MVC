(function () {
    var htmlCalcolatrice = '<div>' +
        '<input type="text" id="visualizza"><br><br>' +
        '<input type="button" class="btn-circle-sm" value="1" id="1">' +
        '<input type="button" class="btn-circle-sm" value="2" id="2">' +
        '<input type="button" class="btn-circle-sm" value="3" id="3">' +
        '<input type="button" class="btn-circle-sm" value="+" id="sum"><br><br>' +
        '<input type="button" class="btn-circle-sm" value="4" id="4">' +
        '<input type="button" class="btn-circle-sm" value="5" id="5">' +
        '<input type="button" class="btn-circle-sm" value="6" id="6">' +
        '<input type="button" class="btn-circle-sm" value="-" id="dif"><br><br>' +
        '<input type="button" class="btn-circle-sm" value="7" id="7">' +
        '<input type="button" class="btn-circle-sm" value="8" id="8">' +
        '<input type="button" class="btn-circle-sm" value="9" id="9">' +
        '<input type="button" class="btn-circle-sm" value="x" id="mul"><br><br>' +
        '<input type="button" class="btn-circle-sm" value="0" id="0">' +
        '<input type="button" class="btn-circle-sm" value="00" id="00">' +
        '<button class="btn-circle-sm" id="risultato">=</button>' +
        '<input type="button" class="btn-circle-sm" value=":" id="div"><br><br>' +
        '<input type="button" class="btn-circle-sm" value="C" id="can">' +
        '</div>';
    $('.calcolatrice').html(htmlCalcolatrice);
    $num1 = 0;
    $num1Vis = "";
    $num2Vis = "";
    $num2 = 0;
    $operazione = "";
    $ris = 0;
    arr = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "00"];
    arr1 = ["sum", "dif", "div", "mul"];
    $(function () {
        $("#myModal").draggable();
    });
    arr.forEach(function (element) {
        $("#" + element).click(function () {
            if ($num1 == 0) {
                $num1Vis = $num1Vis + element;
                $("#visualizza").val($num1Vis);
            } else if ($num1 != 0) {
                $num2Vis = $num2Vis + element;
                $("#visualizza").val($num2Vis);
            }
        });
    });
    $("#can").click(function () {
        if ($num1 == 0) {
            $num1Vis = "";
            $("#visualizza").val($num1Vis);
        } else if ($num1 != 0) {
            $num2Vis = "";
            if ($ris == $num1) {
                var num1 = "";
                $num1 = 0;
            }
            $("#visualizza").val($num2Vis);

        }
    });

    arr1.forEach(function (element) {
        $("#" + element).click(function () {
            $num1 = $num1 + 1;
            $operazione = element;
            $("#visualizza").val("");

        });
    });
    $( "#myModal" ).keypress(function(event) {
            if (event.which == 43) {
                if ($num1 == 0) {
                    $num1Vis = $("#visualizza").val();
                    $("#visualizza").val("");
                }
                $num1 = $num1 + 1;
                $operazione = "sum";
                $("#visualizza").val("");
            }


            else if (event.which == 45) {
                if ($num1 == 0) {
                    $num1Vis = $("#visualizza").val();
                    $("#visualizza").val("");
                }
                $num1 = $num1 + 1;
                $operazione = "dif";
                $("#visualizza").val("");
            }


            else if (event.which == 47) {
                if ($num1 == 0) {
                    $num1Vis = $("#visualizza").val();
                    $("#visualizza").val("");
                }
                $num1 = $num1 + 1;
                $operazione = "div";
                $("#visualizza").val("");
            }



            else if (event.which == 42) {
                if ($num1 == 0) {
                    $num1Vis = $("#visualizza").val();
                    $("#visualizza").val("");
                }
                $num1 = $num1 + 1;
                $operazione = "mul";
                $("#visualizza").val("");
            }


            else if (event.which == 13) {
                if ($num1 == 1) {
                    console.log($num1Vis);
                    console.log($num2Vis);
                    console.log($operazione);
                    var num1 = $num1Vis;
                    var num2 = $("#visualizza").val()
                    $num1Vis = "";
                    $num2Vis = "";
                    var operazione = $operazione
                } else if ($num1 > 1) {
                    console.log(num1);
                    console.log($num2Vis);
                    $ris = $num1;
                    var num1 = $num2;
                    var num2 = $("#visualizza").val()
                    console.log(num1);
                    operazione = $operazione;
                    $num2Vis = "";
                    console.log($operazione);
                }
                $.post("/calcolatrice/calcola",
                    {
                        num1: num1,
                        num2: num2,
                        operazione: operazione

                    }, function (data) {
                        console.log(data.result);
                        $("#visualizza").val("");
                        $("#visualizza").val(data.result);
                        $num2 = data.result;
                    });
            }
            console.log($operazione);
            console.log($num1Vis);
            console.log(event);
        });
    $("#risultato").click(function () {
        if ($num1 == 1) {
            console.log($num1Vis);
            console.log($num2Vis);
            console.log($operazione);
            var num1 = $num1Vis;
            var num2 = $num2Vis;
            $num1Vis = "";
            $num2Vis = "";
            var operazione = $operazione
        } else if ($num1 > 1) {
            console.log(num1);
            console.log($num2Vis);
            $ris = $num1;
            var num1 = $num2;
            var num2 = $num2Vis;
            console.log(num1);
            operazione = $operazione;
            $num2Vis = "";
            console.log($operazione);
        }
        $.post("/calcolatrice/calcola",
            {
                num1: num1,
                num2: num2,
                operazione: operazione

            }, function (data) {
                console.log(data.result);
                $("#visualizza").val("");
                $("#visualizza").val(data.result);
                $num2 = data.result;
            });
    });


})
();