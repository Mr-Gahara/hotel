
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

    .room-desc {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        gap: 12px;
        flex-shrink: 0;
    }
</style>

