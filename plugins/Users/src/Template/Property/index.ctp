<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $property
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Property'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Plots'), ['controller' => 'property','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Comercial'), ['controller' => 'property','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Rent'), ['controller' => 'property','action' => 'index']) ?></li>

    </ul>
</nav>
<style>
    .card{
        width:70%;
        box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
    transition: 0.3s;
    border-radius: 5px;
    }
.body{
    float:right;
    margin-top:10px;
    margin-right:170px;
}
a{
    color:white;
}
.imag{
    margin: 10px 10px 10px;
}
.b{
    border-radius:10px;
    margin-left:10px;
}


</style>
<body>
    <div class="products index large-9 medium-8 columns content">

        <div class='col-md-4' style="margin-top:10px;">
    <form action="<?php echo $this->url->build(['action'=>'search']) ?>" method="get">
        
            <input type="search" name="" class="form-control" placeholder="Search">
            
            <button class="btn btn-primary input -group-text" type="submit">search</button>
            
               
</form>
<div class="row">

    <?php foreach ($property as $property): ?>
  <div >

                
                <div class="card">
                <?= $this->Html->image( $property->image, ['border' => '0', 'data-src' => $property->image, 'class' => 'imag']); ?>
                    
                    <div class="card-body body">
                    
                        <span style="color: #000;" class="card-title"><?php echo "<b>"."Land Area : " . "</b>". $property->title; ?></span><br>
                        <span style="color: #000;" class="card-title"><?php echo "<b>"."Price : " . "</b>". $property->price;?></span><br>
                        <span style="color: #000;" class="card-title"><?php echo "<b>"."Bed : " . "</b>". $property->room; ?></span><br>
                        <span style="color: #000;" class="card-title"><?php echo "<b>"."Bath : " . "</b>". $property->bath; ?></span><br>
                        <span style="color: #000;" class="card-title"><?php echo "<b>"."Location : " . "</b>". $property->location; ?></span><br>
                        <span style="color: #000;" class="card-title"><?php echo "<b>"."Phone : " . "</b>". $property->phone; ?></span><br>
                        </div>
                        <div class="card-title"><?= $this->Html->Link(__($property->name),['action' => 'view',$property->id]) ?></div>
                        <div class="actions card-text">
                            <button class="b"><?= $this->Html->link(__('View'), ['action' => 'view' , $property->id]) ?></button>
                            </div>
                    </div>

                </div>
  <br><br>
  <?php endforeach; ?>
 
</div>

</div>
</body>
