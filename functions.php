<?php 

function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}

function makeIceCream($type) {
  if ($type == 'vanilla') {
    $valid = true;
    $description = 'Vanilla ice cream is a soft frozen dessert made with vanilla bean extract, milk, and cream.';
  } else if ($type == 'chocolate') {
    $valid = true;
    $description = 'Chocolate ice cream is a soft frozen dessert made with coco powder, milk and cream.';
  } else if ($type == 'strawberry') {
    $valid = true;
    $description = 'Strawberry ice cream is a soft frozen dessert made with blended strawberries or flavoring, milk and cream.';
  
  } else {
    $valid = false;
  };

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$type.'.jpg" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.titlecase($type).'</h2>
          <p class="card-text">'.$description.'</p>
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>'.capfirst($type).'? Gross!</strong> Enter something good next time.</p>
      </div>
    ');
  }
}
