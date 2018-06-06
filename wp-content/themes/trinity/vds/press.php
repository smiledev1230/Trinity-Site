<?php 

$allFileds	=	get_fields();
$allIDs 	=	$allFileds['select_article']; ?>

<div class="row accordion-row <?php echo $accordionType ?>">
    <div class="wrapper">

<?php foreach ($allIDs as $acc){

$title		=	get_the_title($acc);
$post		=	get_post($acc);
$content 	=	$post->post_content; 
$withVC		=	do_shortcode($content); 
$url		=	get_the_permalink($acc);
?>


            <h4 class="accordion"><?php echo $title; ?></h4>
            <div class="panel">
                <?php echo $withVC ?>
                <a href="<?php echo $url ?>">[Direct Link]</a>
            </div>



 <?php $n++;} ?>

 	</div>
 </div>

<style>
    

  .accordion {
      cursor: pointer;
  }
  .panel{
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        padding-left:30px;
        margin-bottom:12px;
  }

.accordion-row.acc-basic h4{
    border-width:2px;
    border-style: solid;
    border-radius: 3px;
}


.accordion-row h4:before{
    content: "+";
    border-radius: 3px;
    border-width: 2px;
    border-style: solid;
    font-size: 15px;
    position: absolute;
    font-size: 30px;
    font-weight: 300;
    margin-top: -4px;
    left:7px;
    line-height: 1;
    padding: 2px 6px 2px 10px;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}

.accordion-row h4.active:before{
    content: "-";
    padding: 0 9px 4px 13px;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}


 
.accordion-row h4{
    text-transform:uppercase;
    padding: 15px 0 15px 70px;
    text-align:left;
} 


.accordion:hover{
    transition: 0.3s;
    
}

.accordion:before{
    position:absolute;
}

 
</style>

<script type="text/javascript">
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
            panel.style.maxHeight = null;
        } else {
             panel.style.maxHeight = panel.scrollHeight + "px";
        } 
    }
}
</script>