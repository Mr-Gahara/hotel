
<!-- header styling -->
<style>
    * {
    margin: 0;
    padding: 0;
    font-family: 'Inknut Antiqua';
    color: black;
    }

    header {
        position: fixed;
        top: 0;
        background-color: #171717;
        inset-inline-end: 0;
        inset-inline-start: 0;
        z-index: 100;
        color: #FFFFFF;
    }

    nav > .logo > h4 {
        margin: 15px;
        font-weight: 600;
        font-size: 21px;
        letter-spacing: 1px;
        color: #FFFFFF;
    }

    header > nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 17px 2%;
    }

    nav ul {
        display: flex;
        padding: 0;
        margin: 0;
        align-items: center;
    }

    nav ul li {
        display: inline-block;
        list-style: none;
        margin: 0 40px;
    }

    nav ul li a {
        text-decoration: none;
        font-size: 20px;
        font-weight: 500;
        letter-spacing: 1px;
        color: #FFFFFF;

    }

    nav ul li a:hover {
        color: #ddc1bb;
        cursor: pointer;
    }


    ul li button {
        border: none;
        border-radius: 10px;
        background-color: #A47D31;
        color: white;
        font-size: 16px;
        letter-spacing: 1px;
        font-weight: bold;
        padding: 15px 25px; /* Consistent padding */
        cursor: pointer;
        margin: 10px 0; /* Consistent margin */
    }

    ul li button:hover {
        background-color: #A47D31;
        color: rgb(233, 233, 233);
        transition: all 0.15s ease-in-out;
    }

    ul li button:active {
        background-color: #A47D31;
        color: white;
    }

    /* Specific styles for additional consistency */
    ul li button:nth-of-type(2) {
        margin-left: 10px;
    }

</style>


<style>

    body {
        background-color: #ffffff;
    }

    h1 {
        color: #A47D31;
        text-align: center;
        font-size: 34px;
    }


    input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
    }

</style>

<style>
    .text > button {
    border: none;
    border-radius: 10px;
    background-color: #A47D31;
    color: white;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: bold;
    padding: 15px 25px; /* Consistent padding */
    cursor: pointer;
    margin: 10px 0; /* Consistent margin */
    }

    .text > button:hover {
        background-color: #A47D31;
        color: rgb(233, 233, 233);
        transition: all 0.15s ease-in-out;
    }

    /* Specific styles for additional consistency */
    .text > button:nth-of-type(2) {
        margin-left: 10px;
    }

    .nav-btn {
        border: none;
        font-family: 'Arial';
        font-weight: 600;
        font-size: 21px;
        letter-spacing: 1px;
        color: #FADCD5;
        border-radius: 10px;
        background-color: #A47D31;
        color: white;
        font-size: 16px;
        letter-spacing: 1px;
        font-weight: bold;
        padding: 15px 25px; /* Consistent padding */
        cursor: pointer;
        margin: 10px 0; /* Consistent margin */
    }

    .nav-btn:hover {
        background-color: #A47D31;
        color: rgb(233, 233, 233);
        transition: all 0.15s ease-in-out;
    }

    .nav-btn:active {
        background-color: #A47D31;
        color: white;
    }

    .nav-btn:nth-of-type(2) {
        margin-left: 10px;
    }
</style>

<!-- home section -->
<style>

    .banner-img {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 31.25%; /* 16:9 aspect ratio (9 / 16 * 100) */
        overflow: hidden;
    }
    .banner-img > img {
        position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; 
    }
    .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Adjust the alpha value to make it darker or lighter */
            z-index: 1;
    }

    .banner-img > h5{
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        z-index: 2; 
        text-align: center;
        width: 100%; 
        padding: 0 20px; /* Add padding for better readability on smaller screens */
    }
</style>



<!-- reservation page -->
<style>

    .reservation-page {
        padding: 2%;
    }

    .title {
        margin-top: 20vh;
        margin-bottom: 5vh;
        display: flex;
        padding: 0px 100px;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        gap: 10px;
        flex-shrink: 0;
    }
    .card-1 {
        display: flex;
        padding: 15px;
        align-items: center;
    }

    .card-content {
        display: flex;
        justify-content: space-around;
        align-items: flex-start;
        gap: 150px;
        flex-shrink: 0;
    }

    .room-type, .room-desc {
        flex: 1; /* Allow room-type and room-desc to grow equally */
    }

    .room-title h5, .room-title h6, .room-title p, .room-desc p {
        margin: 0;
    }


    .room-type-img {
        width: 373px;
        height: auto;
        flex-shrink: 0;
    }

    .room-type {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        gap: 30px;
        flex-shrink: 0;
    }

    .room-title {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        gap: 12px;
        flex-shrink: 0;
    }

    .room-title > h5 {
        color: #000;

        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 150%;
    }

    .room-title > h6 {
        color: #FF5E1F;
        font-family: "Inknut Antiqua";
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 100%;
    }

    .room-desc {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        gap: 12px;
        flex-shrink: 0;
    }

    .tipe-btn {
        display: flex;
        width: 269px;
        padding: 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 10px;
        background: #000;
        color: white;
    }


    /* .column-list {
        display: flex;
        width: 579px;
        height: 227px;

        line-height: 150%;
        justify-content: flex-start;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
    } */

    /* Section Styles */
.form-page-pemesanan {
    display: flex;
    justify-content: center;
    padding: 20px;
    padding-top: 228px;
    flex-direction: column;
    align-items: center;
}

.form-content {
    display: flex;
    width: 100%;
    max-width: 1200px;
    gap: 50px;
    
}

.card-1 {
    flex: 1;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    padding: 20px;
}

.card-1 .content-inside {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.card-1 .title-room h5 {
    font-size: 1.5em;
    margin: 20px 0;
}

.card-1 .room-type-img-pemesanan {
    width: 100%;
    border-radius: 8px;
}

.card-1 .feature-list {
    margin: 20px 0;
}

.card-1 .feature-list h6 {
    font-size: 1.2em;
    padding-bottom: 20px;
}

.card-1 .feature-list   ul  li {
    color: #828282;
    font-style: normal;
    font-weight: 500;
    line-height: 150%; /* 30px */
    
}

.card-1 .column {
    display: flex;
    gap: 20px;
}

.card-1 .column p {
    flex: 1;
}

/* Form Styles */
.form-side {
    flex: 1;
    border-radius: 8px;
    padding: 20px;
}

form .mb-3 {
    margin-bottom: 20px;
}

.form-label {

    
}

.form-input {
    width: 100%; /* Adjust the width as needed */
    height: 50px; /* Adjust the height as needed */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
    margin: 5px 0;
}

form .form-check {
    margin: 40px 0;
}

form .form-check-label {
    margin-left: 10px;
}

form .btn {
    background-color: #000;
    color: #fff;
    border: none;
    padding: 15px 20px;
    cursor: pointer;
    width: 100%;
    border-radius: 8px;
}



</style>

