<?php 

<<<<<<< HEAD



=======
>>>>>>> 139c6a8... second commit
function getProjects() 
{
  return json_decode(file_get_contents(__DIR__.'/projects.json'), true);
                       echo '<pre>';
                       var_dump($projects);
                       echo '</pre>';
                       exit;
}


function getProjectById($id) 
{
    $projects = getProjects();
    foreach ($projects as $project) {
        if ($project['id'] == $id) {
            return $project;
        }
    }
    return null;
    
}

function createProject($data) 
{
    
    $projects = getProjects();
    
    $data['id'] = rand(1000000, 2000000);
    
    $projects[] = $data;
    
    putJson($projects);
    
    return $data;
    
}


function updateProject($data, $id) 
{

    $projects = getProjects();
    foreach ($projects as $i => $project) {
        if ($project['id'] == $id) {
            $projects[$i] = array_merge($project, $data);
        }
       
    }
putJson($projects);
}


function deleteProject($id) 
{
    $projects = getProjects();
    
    foreach ($projects as $i => $project) {
        if ($project['id'] == $id) {
            array_splice($projects, $i, 1);
        }
    }
    
    putJson($projects);
}


function putJson($projects) {
    file_put_contents(__DIR__.'/projects.json', json_encode($projects));
}




 





?>
