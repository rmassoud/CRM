<?php
// Routes for seeding test system with data

$app->group('/data/seed', function () {

  // generate x families and people in each family
  $this->get('/families/{count}', function ($request, $response, $args) {
    $query = $args['count'];
    $data = $this->DataSeedService->generateFamilies($query);
    return $response->write($data);
  });

  // Not fully working yet but genrate sunday school classes
  $this->post('/sundaySchoolClasses/', function ($request, $response, $args) {
    return $response->withJson($this->DataSeedService->generateSundaySchoolClasses());
  });

});
