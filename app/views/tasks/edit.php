<?php

$taskFormTitle = 'Edit Task';
$taskFormDescription = 'Update task details, timing, and project context.';
$taskFormAction = "/dashboard/tasks/$taskId/edit";
$taskFormButton = 'Save Changes';
$taskFormButtonIcon = 'save';
$taskTitleValue =  $task['title'];
$taskDescriptionValue =  $task['description'];
$taskDueDateValue = $task['due_date'];
$taskCategoryValue = 'Development';
$showDeleteAction = true;
$taskDeleteUrl = "/dashboard/tasks/$taskId/delete";
$taskPriorityValue = $task['priority']; 
$taskFormMethod = 'PATCH';

require __DIR__ . '/create.php';
