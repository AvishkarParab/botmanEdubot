<script>
let alert = document.querySelector(".alert");
let submit = document.querySelector(".submit");
let courseName = document.querySelector("#courseName");

let grade = document.querySelector("#grade");
let gradeSelectBtn = document.querySelector(".gradeSelectBtn");

let alertCourse = document.querySelector("#alertCourse");

let gradeSelectionContainer = document.querySelector(".gradeSelectionContainer");
let mainContainer = document.querySelector(".mainContainer");

let no_display = document.querySelector(".no_display");
let gradeSpan = document.querySelector(".gradeSpan");
gradeSelectBtn.onclick = () => {
    console.log(grade.value == "");
    if (grade.value != "") {
        mainContainer.style.display = "flex";
        gradeSpan.innerText = grade.value;
        gradeSelectionContainer.style.display = "none";
    } else {
        let timeout = setTimeout(() => {
            alertCourse.style.display = "flex";
        }, 0);
        setTimeout(() => {
            alertCourse.style.display = "none";
            clearTimeout(timeout);
        }, 3000);
    }
}
submit.onclick = (e) => {
    if (courseName.value.length <= 0) {
        e.preventDefault();
        let timeout = setTimeout(() => {
            alert.style.display = "flex";
        }, 0);
        setTimeout(() => {
            alert.style.display = "none";
            clearTimeout(timeout);
        }, 3000);
    }
}
</script>