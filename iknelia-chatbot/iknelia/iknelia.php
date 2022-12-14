<?php
##-----------------------------Core--------------------------##
// Zaroc
require_once("../zaroc/zaroc.php");                          # Zaroc Library
// Vendor
// require_once("../vendor/autoload.php");                    # Optional (For vendor and thir party components)

##------------------Chatbot Variables------------------------##
// Links, Emails, Information
require_once("core/variables.php");                         # Informational Variables
// Url of common images
require_once("core/images.php");                            # Specific Images for your bot

##----------------------Authorization------------------------##
// Makes Authorization Functionality //contraseñas
auth($chatbotName,$chatbotPassword);                        # Remember to put $chatbotName and $chatbotPassword in your bot variables

##---------------------------Classes----------------------------------##
# Classes
require_once("classes/Engages.php");


##---------------------------VIEWS----------------------------------##
# basicIntents
             #To make user intents Create User Intent, connect Webhook and test your Request/Response
require_once("intents/test.php");                   # Basic Intents
require_once("intents/ansiedad/ansiedad.php");
require_once("intents/generales.php");
require_once("intents/depresion/depresion.php");

?>
