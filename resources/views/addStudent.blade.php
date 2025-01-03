<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
</head>
<body>
    <div>
        <h3>Add New Student</h3>
        <a href="/">Back to home</a>
        <form action="{{route('studentInfo')}}" method="POST">
            @csrf
            <label for="">Student Name</label>
            <input type="text" name="s_name" id="">
            <label for="">Image</label>
            <input type="file" name="s_image" id="">
            <label for="">Roll Number (jsc/ssc)</label>
            <input type="text" name="s_roll" id="">
            <label for="">Father name</label>
            <input type="text" name="s_father_n" id="">
            <label for="r">Birth Certificate Number</label>
            <input type="number" name="birthCertificateNumber" id="">
            <label for="">Phone number</label>
            <input type="tel" name="phoneNumber" id="">
            <label for="">Course</label>
            <input type="text" name="course" id="">
            <label for="">Shift</label>
            <input type="text" name="shift" id="">
            <label for="">Address</label>
            <input type="text" name="address" id="">
            <input type="submit" value="Create Student">
        </form>
    </div>
</body>
</html>