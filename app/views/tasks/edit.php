<?php

require_once __DIR__ . '/../../../config/database.php';


require_once __DIR__  .  '/../../controllers/tasks/EditTaskController.php';

$taskFormTitle = 'Edit Task';
$taskFormDescription = 'Update task details, timing, and project context.';
$taskFormAction = '#';
$taskFormButton = 'Save Changes';
$taskFormButtonIcon = 'save';
$taskTitleValue =  $task['title'];
$taskDescriptionValue =  $task['description'];
$taskDueDateValue = '2024-10-24';
$taskCategoryValue = 'Development';
$showDeleteAction = true;

require __DIR__ . '/create.php';
