$("#editForm").validate({
    rules: {
        title: {
            minlength: 3,
            required: true
        },
        desc: {
            minlength: 3,
            required: true

        },
        content: {
            minlength: 5,
            required: true

        }
    },
    messages: {
        title: {
            required: "Enter the title",
            minlength: "Enter the 3 min title"

        },
        desc: {
            required: "Enter the desc",
            minlength: "Enter the 3 min summary"
        },
        content: {
            required: "Enter the content",
            minlength: "Enter the 5 min content"
        }
    }
});