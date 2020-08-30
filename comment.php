<div class="row justify-content-center">
          <div class="col-lg-12 rounded bg-light p-4">
          <?php
          $sql="SELECT *FROM comment_table ORDER BY id DESC";
          $result=$conn->query($sql);
          while($row=$result->fetch_assoc()){
            ?>
             <div class="card" style="width: 10rem;">
  <div class="card-body">
    <h5 class="card-title">posted by:<?=$row['name']?></h5>
    <h6 class="card-subtitle mb-2 text-muted">on:<?=$row['cur_date']?></h6>
    <p class="card-text"><?=$row['comment']?></p>
  </div>
  <?php } ?>
</div>
</div>
</div>