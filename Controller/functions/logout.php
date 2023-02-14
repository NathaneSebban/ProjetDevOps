<?php
// Initialiser la session
session_start();

// Détruire la session user
unset( $_SESSION[ 'username' ] );

header( 'Location: ./' );
