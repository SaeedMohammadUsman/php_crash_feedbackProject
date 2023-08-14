<?php include 'inc/header.php' ?>

<?php


//$feedback = 
//[
//   [
//     'id' => '1',
//     'name' => 'beth williams',
//     'email' => 'beth@gmial.com',
//     'body' => 'traversy media is ok'
//   ],

//   [
//     'id' => '2',
//     'name' => 'wait williams',
//     'email' => 'waith@gmial.com',
//     'body' => 'traversy media is suckk'
//   ],
//   [
//     'id' => '3',
//     'name' => 'Bilal williams',
//     'email' => 'bilal@gmial.com',
//     'body' => 'traversy media is rocks'
//   ],
// ]



$sql = 'SELECT * FROM feedback';
$result= mysqli_query($conn,$sql);
$feedback = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>


<h2>Past Feedback</h2>

<?php
if (empty($feedback)) : ?>

  <p class="lead mt3">There is no feedback</p>

  <?php endif; ?>


  <?php foreach ($feedback as $item):?>
  <div class="card my-3 w-75">
    <div class="card-body  text-center">
      <?php echo $item ['body']; ?>

      <div class="text-secondary mt-2">
        by <?php echo $item['name'];?> 
        on <?php echo $item ['date'];?>

      </div>
    </div>
  </div>
    <?php endforeach ; ?>

  <?php include 'inc/footer.php' ?>