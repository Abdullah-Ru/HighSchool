function replaceWithInput() {
    // Get the container div
    var container = document.getElementById("editContainer");
    
    // Get the original button
    var originalButton = document.getElementById("editButton");

    // Remove the original button
    container.removeChild(originalButton);

    // Create a new input element
    var input = document.createElement("input");
    input.type = "text";
    input.id = "editInput";
    input.placeholder = "تعديل ساعات التطوع";
    input.setAttribute("class","input")
    // Create a new button element
    var newButton = document.createElement("button");
    newButton.id = "newEditButton";

    // Create and append five <span> elements with classes "circle1" to "circle5"
    for (var i = 1; i <= 5; i++) {
        var circleSpan = document.createElement("span");
        circleSpan.className = "circle" + i;
        newButton.appendChild(circleSpan);
    }

    // Create a <span> element with class "text"
    var textSpan = document.createElement("span");
    textSpan.className = "text";
    textSpan.textContent = "حفظ"; // Set the text for the "حفظ" button

    // Append the "حفظ" <span> element to the new button
    newButton.appendChild(textSpan);

    // Append the new input and button to the container
    container.appendChild(input);
    container.appendChild(newButton);
    // Remove the input and the "حفظ" button
   

    // Create a new button with the original behavior

    // Append the new button to the container

}

