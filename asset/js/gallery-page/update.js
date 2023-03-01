$(document).ready(function(){
    // Update
    $(document).on("click", ".updateIcon", function() {
        const id = $(this).attr("data-id").trim();
    
        // Find the textarea element with the matching data-caption attribute
        const textarea = $('textarea[data-caption="' + id + '"]');
    
        // Get the value of the textarea
        const textareaValue = textarea.val();
        
        console.log(textareaValue);
        console.log(id);
    });
    

});