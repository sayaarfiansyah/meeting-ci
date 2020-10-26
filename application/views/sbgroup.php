<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<aside class="col-sm-2">
    <div class="card">
        <article class="card-group-item>">
            <div class="card-body">
            <label class="col-sm-12">
				  <span class="form-check-label"><a href="<?php echo site_url('calendar');?>" class="btn btn-success  col-sm-12"> Calendar</a></span>
				</label>
            <label class="col-sm-12">
				  <span class="form-check-label"><a href="<?php echo site_url('group');?>" class="btn btn-primary  col-sm-12"> Create Group</a></span>
				</label>
                <label class="col-sm-12">
				  <span class="form-check-label"><a class="btn btn-light col-sm-12" data-toggle="modal" data-target="#exampleModal"> Marge Group</a></span>
				</label>
            </div>
        </article>
        <br>
        <article class="card-group-item>">
            <header class="card-header"><h6 class="title">Group List</h6></header>
            <div class="filter-content">
                <div class="list-group list-group-flush">
                    <?php foreach($group_name as $gn):?>
                    <a href="<?php echo site_url('Group/id/'.$gn['group_id'].'');?>" class="list-group-item"><?= $gn['group_name']?></a>
                    <?php endforeach ?>
                </div>
            </div>
        </article>
    </div>

</aside>

