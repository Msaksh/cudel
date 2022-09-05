<?php $this->load->view('common/header');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>


        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                /* outline: 1px solid red; */
                /* background: rgba(255, 0, 0, 0.373); */
            }
            .become {
                height: 100%;
                width: 100%;
                display: flex;
                /* flex-direction: column; */
                align-items: center;
                justify-content: space-evenly;
                background-color: #dbdffd;
                font-family: Cursive;
                color: rgb(91, 91, 91);
                padding: 35px;
            }
            .become_border {
                background-image: linear-gradient(180deg, #242f9b, #dbdffd);
                height: fit-content;
                width: 400px;
                border-radius: 3px;
                box-shadow: 0px 1px 7px #3b2ade;
            }
            .become_border > form {
                display: flex;
                flex-direction: column;
                padding: 20px;
            }
            .become_border > h1 {
                text-align: center;
                font-family: cursive;
                color: white;
                font-weight: 200;
                padding-top: 10px;
                text-shadow: 0px 0px 10px #dbdffd;
            }

            .become_border > form > input {
                margin: 5px;
                padding: 10px;
                border-radius: 4px;
                border: none;
                box-shadow: 0px 0px 4px #3b2ade;
                background-color: #fff;
                color: grey;
                outline: none;
                font-size: 16px;
            }

            .become_border > form > select {
                font-family: sans-serif;
                font-weight: 300;
                outline: none;
                width: 98%;
                border-radius: 4px;
                padding: 10px;
                font-size: 16px;
                color: grey;
                margin: auto;
            }

            .gender {
                padding: 15px;
                color: rgb(70, 70, 70);
                display: flex;
                align-items: baseline;
                justify-content: space-between;
            }

            .gender > h2 {
                font-size: 16px;
            }

            .gender > input {
                width: 30px;
            }

            .become_border > form > textarea {
                border-radius: 4px;
                padding: 10px;
                font-size: 16px;
                outline: none;
                color: grey;
            }

            .become_border > form > button {
                padding: 10px;
                font-size: 16px;
                color: #fff;
                margin-top: 15px;
                margin-bottom: 15px;
                background: linear-gradient(to right, #aaadc5, #3b2ade);
                outline: none;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            .become_border > form > button:hover {
                background: linear-gradient(to right, #53556e, #4530ff);
            }

            #pro {
                margin: 5px;
                border-radius: 4px;
            }

            #expe {
                margin: 5px;
            }

            .steps {
                width: 50%;
                /* outline: 2px solid red; */
                padding: 10px;
                margin-top: 10px;
                margin-bottom: 10px;
                display: flex;
                flex-direction: column;
            }
            .steps > h1 {
                font-size: 1.8rem;
                padding: 20px;
                text-align: center;
            }
            .stepss {
                /* outline: 2px solid black; */
                display: flex;
                flex-direction: column;
            }

            .rounded {
                border-radius: 50%;
                margin: 3px 5px;
            }

            .flexClassStep {
                position: relative;
                width: 100%;
                /* border: 2px solid blue; */
                display: flex;
                align-items: center;
                justify-content: space-between !important;
            }

            .flexClassStep .dots:before {
                content: "";
                position: absolute;
                left: 110px;
                width: 15px;
                height: 15px;
                background-color: #3b2ade;
                border-radius: 50%;
                margin-left: 20px;
            }

            .flexClassStep .dots:after {
                content: "";
                position: absolute;
                left: 116px;
                width: 2px;
                height: 100px;
                background: #3b2ade;
                margin-left: 20px;
            }
            .flexClassStep:last-child .dots:after {
                content: none;
            }

            .flexClassStep > h3 {
                /* border: 1px solid orange; */
                width: 100%;
                margin-left: 70px;
            }

            .flexClassStep > h3 > span {
                color: black;
                font-weight: 800;
            }

            @media only screen and (max-width: 900px) {
                .become {
                    flex-direction: column;
                }
                .steps {
                    width: 100%;
                }

                .become_border {
                    width: 360px;
                }

                .steps {
                    margin-bottom: 40px;
                }
            }
        </style>
    </head>
    <body>
        <div class="become">
            <div class="steps">
                <h1>Become beauty experts in just 4 steps.</h1>
                <div class="stepss">
                    <div class="flexClassStep">
                        <img
                            class="rounded"
                            src="<?=base_url()?>assets/images/fillform.png"
                            width="100"
                            height="100"
                            alt="images "
                        />
                        <div class="dots"></div>

                        <h3>
                            <span>Step 1:</span>
                            Fill the form
                        </h3>
                    </div>
                    <div class="flexClassStep">
                        <img
                            class="rounded"
                            src="<?=base_url()?>assets/images/document.png"
                            width="100"
                            height="100"
                            alt="images "
                        />
                        <div class="dots"></div>

                        <h3>
                            <span>Step 2:</span>
                            Complete documentation
                        </h3>
                    </div>
                    <div class="flexClassStep">
                        <img
                            class="rounded"
                            src="<?=base_url()?>assets/images/training1.png"
                            width="100"
                            height="100"
                            alt="images "
                        />
                        <div class="dots"></div>

                        <h3>
                            <span>Step 3:</span>
                            Complete your training
                        </h3>
                    </div>
                    <div class="flexClassStep">
                        <img
                            class="rounded"
                            src="<?=base_url()?>assets/images/startearning.png"
                            width="100"
                            height="90"
                            alt="images "
                        />
                        <div class="dots"></div>

                        <h3>
                            <span>Step 4:</span>
                            Start earning.
                        </h3>
                    </div>
                </div>
            </div>

            <div class="become_border">
                <h1>Fill form</h1>
                <form action="<?=base_url()?>beautyexpert" method="post">
                    <input name="name" type="text" placeholder="Name" required />
                    <input name="pincode" type="text" placeholder="Pincode" maxlength="6" required />
                    <input name="mobile" type="text" placeholder="Mobile no." required />
                    <!-- <input type="text" placeholder="Name" /> -->
                    <!-- profession dropDown -->
                    <select name="profession" id="pro" required>
                        <option value="beautician">
                            What is your Profession ?
                        </option>
                        <option value="makeupartist">Make up Artist</option>
                        <option value="hairstylist">Hair Stylist</option>
                        <option value="nailtechnician">Nail Technician</option>
                        <option value="hairtechnician">Hair Technician</option>
                        <option value="pedicurist">Pedicurist</option>
                    </select>
                    <!-- years experience -->
                    <select name="experience" id="expe" required>
                        <option value="">Years of experience ?</option>
                        <option value="Less than 1 year">Less than 1 year</option>
                        <option value="2 years">2 years</option>
                        <option value="3 years">3 years</option>
                        <option value="4 Years">4 Years</option>
                        <option value="5 years">5 years</option>
                        <option value="More than 5 years">More than 5 years</option>
                    </select>

                    <div class="gender">
                        <h2>Gender:</h2>
                        <input type="radio" value="male" name="gender" id="male" required />
                        <label for="male">Male</label>
                        <input type="radio" value="female" name="gender" id="female" required/>
                        <label for="male">Female</label>
                        <input type="radio" value="Transgender" name="gender" id="transgender" required />
                        <label for="male">Transgender</label>
                    </div>

                    <textarea
                        name="comment"
                        id="comment"
                        cols="30"
                        placeholder="Comment"
                   required ></textarea>

                    <button type="Submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>
<?php $this->load->view('common/footer');?>
