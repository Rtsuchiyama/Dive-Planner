<!DOCTYPE <!DOCTYPE html>
<html>
<head>
  <title>Dive Table</title>
</head>
<body>

<p id="depthTimeTable"></p>

<script>
var depth35 = [10, 19, 25, 29, 32, 36, 40, 44, 48, 52, 57, 62, 67, 73, 79, 85, 92, 100, 108, 117, 127, 139, 152, 168, 188, 205];
var depth40 = [9, 16, 22, 25, 27, 31, 34, 37, 40, 44, 48, 51, 55, 60, 64, 69, 74, 79, 85, 91, 97, 107, 111, 120, 129, 140];
var depth50 = [7, 13, 17, 19, 21, 24, 26, 28, 31, 33, 36, 39, 41, 44, 47, 50, 53, 57, 60, 63, 67, 71, 75, 80];
var depth60 = [6, 11, 14, 16, 17, 19, 21, 23, 25, 27, 29, 31, 33, 35, 39, 42, 44, 47, 49, 52, 54, 55];
var depth70 = [5, 9,12, 13, 15, 16, 18, 19, 21, 22, 24, 26, 27, 29, 31, 33, 35, 36, 38, 40];
var depth80 = [4, 8, 10, 11, 13, 14, 15, 17, 18, 19, 21, 22, 23, 25, 26, 28, 29, 30];
var depth90 = [4, 7,9, 10, 11, 12, 13, 15, 16, 17, 18, 19, 21, 22, 23, 24, 25];
var depth100 = [3, 6, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
var depth110 = [3, 6, 7, 8, 9, 10, 11, 12, 13, 14, 14, 15, 16]; 
var depth120 = [3, 5, 6, 7, 8, 9, 10, 11, 12, 12, 13]; 
var depth130 = [3, 5, 6, 7, 8, 8, 9, 10];
var depth140 = [4, 4, 5, 6, 7, 8];


function depthTime(depth35, depth40, depth50, depth60, depth70, depth80, depth90, depth100, depth110, depth120, depth130, depth140) {
depth = [depth35, depth40, depth50, depth60, depth70, depth80, depth90, depth100, depth110, depth120, depth130, depth140];
return depth.toString();
}

document.getElementById("depthTimeTable").innerHTML = depthTime(depth35, depth40, depth50, depth60, depth70, depth80, depth90, depth100, depth110, depth120, depth130, depth140);
</script>

</body>
</HTML>