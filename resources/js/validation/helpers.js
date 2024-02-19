export const isValidPhoneNumber = (phoneNumber) => {
    phoneNumber = phoneNumber.replace(/[\s\-]/g, "");
    return (
        phoneNumber.match(
            /^((\+?3)?8)?((0\(\d{2}\)?)|(\(0\d{2}\))|(0\d{2}))\d{7}$/
        ) != null
    );
};

export const nameRegex = /^[a-z ,.'-]+$/i;
