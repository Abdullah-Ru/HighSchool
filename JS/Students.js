function replaceWithInput() {
    // Get the container div
    var container = document.getElementById("buttonContainer");

    // Get the original button
    var originalButton = document.getElementById("editButton");

    // Remove the original button
    container.removeChild(originalButton);

    // Create a new input element
    var input = document.createElement("input");
    input.type = "text";
    input.id = "editInput";
    input.placeholder = "كم عدد الساعات التطوع"
    input.setAttribute("class","input")

    // Create a new button element
    var newButton = document.createElement("button");
    newButton.id = "newEditButton";
    newButton.textContent = "حفظ"; // Set the text for the new button

    // Append the input and new button to the container
    container.appendChild(input);
    container.appendChild(newButton);
}