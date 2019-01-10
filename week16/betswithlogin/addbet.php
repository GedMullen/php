<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $descriptionError = null;
        $oddsError = null;
        $amountError = null;
         
        // keep track post values
        $description = $_POST['description'];
        $odds = $_POST['odds'];
        $amount = $_POST['amount'];
         
        // validate input
        $valid = true;
        if (empty($description)) {
            $descriptionError = 'Please enter Description';
            $valid = false;
        }
         
        if (empty($odds)) {
            $oddsError = 'Please enter Email Odds';
            $valid = false;
        }
         
        if (empty($amount)) {
            $amountError = 'Please enter Mobile Amount';
            $valid = false;
        }
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO bets (customer_id,description,odds,amount) values(?, ?, ?, ?)";
            $q = $pdo->prepare($sql);
			$id = $_REQUEST['id'];
            $q->execute(array($id,$description,$odds,$amount));
            Database::disconnect();
            header("Location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Add A Bet</h3>
                    </div>
            
                    	<?php
                        	echo '<form class="form-horizontal" action="addbet.php?id='.$_REQUEST['id'].'" method="post">';
                            ?>
                      <div class="control-group <?php echo !empty($descriptionError)?'error':'';?>">
                        <label class="control-label">Description</label>
                        <div class="controls">
                            <input name="description" type="text"  placeholder="Description" value="<?php echo !empty($description)?$description:'';?>">
                            <?php if (!empty($descriptionError)): ?>
                                <span class="help-inline"><?php echo $descriptionError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($oddsError)?'error':'';?>">
                        <label class="control-label">Odds</label>
                        <div class="controls">
                            <input name="odds" type="text" placeholder="Odds" value="<?php echo !empty($odds)?$odds:'';?>">
                            <?php if (!empty($oddsError)): ?>
                                <span class="help-inline"><?php echo $oddsError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($amountError)?'error':'';?>">
                        <label class="control-label">Amount</label>
                        <div class="controls">
                            <input name="amount" type="text"  placeholder="Amount" value="<?php echo !empty($amount)?$amount:'';?>">
                            <?php if (!empty($amountError)): ?>
                                <span class="help-inline"><?php echo $amountError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Add Bet</button>
                          <a class="btn" href="index.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
