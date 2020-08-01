$("#commentForm").validate({
    rules: {
        name: {
            required: true,
        },
        email: {
            email: true
        }
    },
    messages: {
        name: {
            required: "Nhập hộ tui cái",
        },
        email: {
            email: "Vui lòng nhập email đúng định dạng, ví dụ: name@domain.com"
        }
    }
});