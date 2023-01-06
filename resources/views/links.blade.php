<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    .text-dark {
     'color': black;
    }



</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container px-4 " style="direction: rtl">
    <div class="text-right">
        <a  href="{{route('creatStudent')}}" class="text-dark">ایجاد دانشجو</a>
        <br>
        <a href="{{route('creatStudent')}}">{{route('creatStudent')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('getStudents')}}" class="text-dark">نمایش دانشجو</a>
        <br>
        <a href="{{route('getStudents')}}">{{route('getStudents')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('createProf')}}" class="text-dark">ایجاد استاد</a>
        <br>
        <a href="{{route('createProf')}}">{{route('createProf')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('getProfs')}}" class="text-dark">نمایش اساتید</a>
        <br>
        <a href="{{route('getProfs')}}">{{route('getProfs')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('createGCourse')}}" class="text-dark">ایجاد درس</a>
        <br>
        <a href="{{route('createGCourse')}}">{{route('createGCourse')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('getCourses')}}" class="text-dark">نمایش دروس</a>
        <br>
        <a href="{{route('getCourses')}}">{{route('getCourses')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('createGroup')}}" class="text-dark">ایجاد گروه درسی</a>
        <br>
        <a href="{{route('createGroup')}}">{{route('createGroup')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('getGroups')}}" class="text-dark">نمایش گروه ها</a>
        <br>
        <a href="{{route('getGroups')}}">{{route('getGroups')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('createTerm')}}" class="text-dark">ایجاد ترم درسی</a>
        <br>
        <a href="{{route('createTerm')}}">{{route('createTerm')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('getTerms')}}" class="text-dark">نمایش ترم ها</a>
        <br>
        <a href="{{route('getTerms')}}">{{route('getTerms')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('searchStudents')}}" class="text-dark">1-جستجو دانشجو بر اساس نام</a>
        <br>
        <a href="{{route('searchStudents')}}">{{route('searchStudents')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('StudentCode')}}" class="text-dark">2-جستجو دانشجو بر اساس کد دانشجویی</a>
        <br>
        <a href="{{route('StudentCode')}}">{{route('StudentCode')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('ProfCode')}}" class="text-dark">3-جستجو استاد بر اساس کد استادی</a>
        <br>
        <a href="{{route('ProfCode')}}">{{route('ProfCode')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('nameProfCode')}}" class="text-dark">4-جستو براساس کد استادی و خروجی نام استاد</a>
        <br>
        <a href="{{route('nameProfCode')}}">{{route('nameProfCode')}}</a>
        <hr>
    </div>
    <div class="text-right">
        <a  href="{{route('getNameGroup')}}" class="text-dark">5-جستو براساس نام گروه</a>
        <br>
        <a href="{{route('getNameGroup')}}">{{route('getNameGroup')}}</a>
        <hr>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
