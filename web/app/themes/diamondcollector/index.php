<div>
    <?php get_header(); ?>


    <body>


        <div class="jumbotron">

            <div class="container">
                <div class="container-fluid">
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">

                                <p id="title">Diamond Collection</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">

                                <p class="lead">Your challenge:
                                    <br>
                                    Collect diamonds so that the "Current Total" <br>
                                    Matches the "Given Sum."
                                    <br>
                                    Each Diamond can be selected atleast once.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">

                                <button id="begin" class="btn btn-primary btn-md">Begin</button>




                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12">
                            <div id="lead" class="d-flex justify-content-center">

                                <span class="stats"> <span>Given Sum:<span id="givenSum"> 0</span></span> <span>
                                        &nbsp;&nbsp;Current Total:<span id="total"> 0</span> <span></span></span></span>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <span class="stats">
                                    <span> Wins: <span id="wins">0</span> &nbsp; &nbsp;Losses: <span
                                            id="losses">0</span>
                                    </span></span></span></span></span>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="wrapper3" class="wrapper3">
            <div id="wrapper2" class="wrapper2">
                <div id="wrapper" class="wrapper">


                    <div id="bottom" class="container">

                        <div class="row">
                            <div class="col-6 col-lg-3">
                                <img id="purpleDiamond" class="hidden"
                                    src="https://media3.giphy.com/media/SHT2ELb4lvmLU9IcC1/giphy.gif?cid=790b76118c290136cb6f0e1c6ecd9f7f4ee165f81023d8f2&amp;rid=giphy.gif"
                                    alt="3d spinning Sticker by Simon Falk">
                                <img class="animate" id="PurpleDiamond" src="../purple.png" alt="purple diamond">
                            </div>

                            <div class="col-6 col-lg-3">
                                <img id="redDiamond" class="hidden"
                                    src="https://media0.giphy.com/media/SiGjBqizFrcXWk5iBb/giphy.gif?cid=790b76115934f95f9ca63c63f401371173ae581025ff47ef&amp;rid=giphy.gif"
                                    alt="marry me spinning Sticker by Simon Falk"><img class="animate" id="RedDiamond"
                                    src="../red.png" alt="red diamond">
                            </div>
                            <div class="col-6 col-lg-3">
                                <img id="blueDiamond" class="hidden"
                                    src="https://media.giphy.com/media/1qgdfBl0FRZ4dM7YzU/giphy.gif"
                                    alt="Marry Me Spinning Sticker by Simon Falk"><img class="animate" id="BlueDiamond"
                                    src="../blue.png" alt="blue diamond">
                            </div>
                            <div class="col-6 col-lg-3">
                                <img id="greenDiamond" class="hidden"
                                    src="https://media.giphy.com/media/pz3ZNXGgvR19V7k8Eb/giphy.gif"
                                    alt="Marry Me Spinning Sticker by Simon Falk"><img class=" animate"
                                    id="GreenDiamond" src="../green.png" alt="green diamond">

                            </div>
                        </div>

                    </div>

                    <div id="container2" class="container2"></div>

                </div>
            </div>
        </div>

    </body>


    <?php get_footer(); ?>
</div>