<div class="jumbotron" style="background-color:#6EAFF5">
	<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
<div class="row">
                <div class="col-lg-6" >
                  <div class="list-group">
                                  <h4>Builder Verification<span class="badge"><?php echo sizeof($builder_verify); ?></span></h4>
<?php foreach($builder_verify as $bv)
{
	echo'
  <span class="list-group-item ">
    <h4 class="list-group-item-heading">'.$bv->builder_name.'</h4>
	'.$bv->city_name.','.$bv->state_name.'<br/>
    Address:'.$bv->address.'<br/>
	location:'.$bv->location.'<br/>
	Contact Number:'.$bv->contact_number.'<br/>
    Mobile:'.$bv->mobile.'<br/>
    Established	:'.$bv->established	.'<br/>
	Company Name:'.$bv->company_name.'<br/>
	Description:'.$bv->description_about_builders	.'<br/><a href="'.URL.'administrator/verifyBuilderNow/'.$bv->builder_id.'">
<button class="btn btn-success">Verify</button></a><a href="'.URL.'administrator/removeBuilderNow/'.$bv->builder_id.'">
<button class="btn btn-danger">Delete</button></a>

  </span>';
}
  ?>
  
</div>
            </div>
            
            <div class="col-lg-6" >
                     <div class="list-group">
                                  <h4>Project Verification<span class="badge"><?php echo sizeof($project_verify); ?></span></h4>

  <?php foreach($project_verify as $bv)
{
	echo'
  <span class="list-group-item ">
    <h4 class="list-group-item-heading">'.$bv->project_name.'</h4>
	'.$bv->city_name.','.$bv->state_name.'<br/>
	Builder Name:'.$bv->builder_name.'<br/>
    Description	:'.$bv->description.'<br/>
	Specifications:'.$bv->specifications.'<br/>
	Amenities:'.$bv->amenities.'<br/>
	Type:'.$bv->type.'<br/>
    Address:'.$bv->address.'<br/>
	location:'.$bv->location.'<br/>
	Website:'.$bv->website.'<br/>
    Mobile:'.$bv->mobile.'<br/>
    Price	:'.$bv->price.'<br/><a href="'.URL.'administrator/verifyProjectNow/'.$bv->project_id.'">
	<button class="btn btn-success">Verify</button></a><a href="'.URL.'administrator/removeProjectNow/'.$bv->project_id.'">
<button class="btn btn-danger">Delete</button></a>

  </span>';
}
  ?>
</div>
            </div>
            </div>
            </div>