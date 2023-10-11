<?php 

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sales</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
        <script src="https://kit.fontawesome.com/35e1f2a27c.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="pagewrapper">
            <?php include 'header.php'; ?>

            <div class="container">
                <form action="#" class="form">
                    <!-- Progressbar-->
                    <div class="progressbar">

                        <div class="progress" id="progress"></div>

                        <div class="progress-step active" data-title="Lead"></div>
                        <div class="progress-step" data-title="Opportunity"></div>
                        <div class="progress-step" data-title="Quote"></div>
                        <div class="progress-step" data-title="Unnamed"></div>
                        <div class="progress-step" data-title="Sale"></div>
                        <div class="progress-step after-sale" data-title="After Sale"></div>
                    </div>
                    <!-- Steps-->
                    <div class="form-step active">
                        <?php include 'lead.php'; ?>
                    </div>
                    <div class="form-step opp">
                        <?php include 'opportunity.php'; ?>
                    </div>
                    <div class="form-step">
                        <h1>Welcome to the Quote stage</h1>
                        <div class="btns-group">
                            <a href="#" class="btn btn-next" id="promoteQuote">Promote</a>
                        </div>
                    </div>
                    <div class="form-step">
                        <h1>Welcome to the Unnamed stage</h1>
                        <div class="btns-group">
                            <a href="#" class="btn btn-next" id="promoteUnnamed">Promote</a>
                        </div>
                    </div>
                    <div class="form-step">
                        <h1>Welcome to the Sale stage</h1>
                        <div class="btns-group">
                            <a href="#" class="btn btn-next" id="promoteSale">Promote</a>
                        </div>
                    </div>
                    <div class="form-step">
                        <h1>Welcome to the After Sale stage</h1>
                        <div class="btns-group">
                            <a href="#" class="btn btn-next" id="promoteAfterSale">Promote</a>
                        </div>
                    </div>


                </form>
            </div>
        
            <?php include 'footer.php'; ?>
        </div>
        <script src="script.js"></script>
    </body>
</html>