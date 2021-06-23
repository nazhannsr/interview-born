<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > University
Breadcrumbs::for('university', function ($trail) {
    $trail->parent('home');
    $trail->push('University Management', route('university.index'));
});

// Home > University > Create
Breadcrumbs::for('university.create', function ($trail) {
    $trail->parent('university');
    $trail->push('Create', route('university.create'));
});

// Home > University > [Edit]
Breadcrumbs::for('university.edit', function ($trail, $university) {
    $trail->parent('university');
    $trail->push('Edit '.$university->acronym, route('university.edit', $university->id));
});

// Home > University > [Department]
Breadcrumbs::for('department', function ($trail, $university) {
    $trail->parent('university');
    $trail->push('Department ('.$university->acronym.')', route('department.index', $university->id));
});

// Home > University > [Department] > Create
Breadcrumbs::for('department.create', function ($trail, $university) {
    $trail->parent('department', $university);
    $trail->push('Create', route('department.create', $university->id));
});

// Home > University > [Department] > [Edit]
Breadcrumbs::for('department.edit', function ($trail, $university, $department) {
    $trail->parent('department', $university);
    $trail->push('Edit', route('department.edit', [$university->id, $department->id]));
});

//Home > University > [Department] > [Staff]
Breadcrumbs::for('department.staff', function ($trail, $university, $department) {
    $trail->parent('department', $university);
    $trail->push('Staff Management ('.$department->acronym.')', route('department.staff.index', [$university->id, $department->id]));
});

//Home > University > [Department] > [Staff] > Create
Breadcrumbs::for('department.staff.create', function ($trail, $university, $department) {
    $trail->parent('department.staff', $university, $department);
    $trail->push('Create', route('department.staff.create', [$university->id, $department->id]));
});

// Home > Staff
Breadcrumbs::for('staff', function ($trail) {
    $trail->parent('home');
    $trail->push('Staff', route('staff.index'));
});

// Home > Staff > Create
Breadcrumbs::for('staff.create', function ($trail) {
    $trail->parent('staff');
    $trail->push('Create', route('staff.create'));
});

// Home > Staff > Edit
Breadcrumbs::for('staff.edit', function ($trail, $staff) {
    $trail->parent('staff');
    $trail->push('Edit', route('staff.edit', $staff->id));
});

