<?php
  function numeroemReais($numero) {
    return "R$ " . number_format($numero, 2,",",".");  
  }