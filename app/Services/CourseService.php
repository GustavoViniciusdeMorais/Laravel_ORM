<?php

namespace App\Services;

use App\Repositories\CourseRepository;

class CourseService
{

    protected $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function getCourses()
    {
        return $this->courseRepository->getAllCourses();
    }

    public function createCourse($data)
    {
        return $this->courseRepository->createCourse($data);
    }

    public function getCourseByUid($identify)
    {
        return $this->courseRepository->getCourseByUid($identify);
    }
}