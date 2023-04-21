<script>
let chapterSelect = document.querySelector(".selectChapter");
let subtopicSelectbtn = document.querySelector("#subtopicEnter");
let chapterName = document.querySelector("#chapterName");

let selectChapter = document.querySelector(".selectChapterObj");
let addChapterbtn = document.querySelector("#addChapterbtn");

let chapterInput = document.querySelector("#chapterNameInput");
let selectChapterContainer = document.querySelector(".selectChapterContainer");

let alert = document.querySelector(".alert");
let submitBtn = document.querySelector("#submitBtn");
subtopicSelectbtn.onclick = () => {
    // console.log(subtopicName.value.length);
    if (chapterName.value.length <= 0) {
        let timeout = setTimeout(() => {
            alert.style.display = "flex";
        }, 0);
        setTimeout(() => {
            alert.style.display = "none";
            clearTimeout(timeout);
        }, 3000);

    } else {
        selectChapter.style.display = "flex";
        selectChapter.style.flexDirection = "column";
        chapterInput.style.display = "none";
        submitBtn.style.display = "block";
    }
}
addChapterbtn.onclick = () => {
    if (addChapterbtn.value == "addc") {
        selectChapterContainer.style.display = "none";
        chapterInput.style.display = "flex";
        document.querySelector(".chapterNameInputOR").style.display = "block";
        addChapterbtn.innerText = "Select Course from the list";
        addChapterbtn.value = "selectc";
    } else {
        selectChapterContainer.style.display = "flex";
        chapterInput.style.display = "none";
        document.querySelector(".chapterNameInputOR").style.display = "none";
        addChapterbtn.innerText = "Add Course";
        addChapterbtn.value = "addc";
    }
}
</script>