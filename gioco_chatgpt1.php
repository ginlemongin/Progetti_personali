<?php

// Set up the game
$location = "forest";
$inventory = array();

// Game loop
while (true) {
  if ($location == "forest") {
    echo "You are in a dense forest. You see a path to the east and a cave to the west.\n";
    echo "What do you want to do?\n";
    echo "1. Go east\n";
    echo "2. Go west\n";
    echo "3. Check inventory\n";
    $choice = readline("Enter your choice: ");
    if ($choice == "1") {
      $location = "clearing";
    } else if ($choice == "2") {
      $location = "cave";
    } else if ($choice == "3") {
      echo "Inventory: " . implode(", ", $inventory) . "\n";
    }
  } else if ($location == "clearing") {
    echo "You are in a clearing. You see a sword on the ground.\n";
    echo "What do you want to do?\n";
    echo "1. Take sword\n";
    echo "2. Go back to forest\n";
    echo "3. Check inventory\n";
    $choice = readline("Enter your choice: ");
    if ($choice == "1") {
      array_push($inventory, "sword");
      echo "You picked up the sword.\n";
    } else if ($choice == "2") {
      $location = "forest";
    } else if ($choice == "3") {
      echo "Inventory: " . implode(", ", $inventory) . "\n";
    }
  } else if ($location == "cave") {
    echo "You are in a dark cave. You see a treasure chest.\n";
    echo "What do you want to do?\n";
    echo "1. Open treasure chest\n";
    echo "2. Go back to forest\n";
    echo "3. Check inventory\n";
    $choice = readline("Enter your choice: ");
    if ($choice == "1") {
      echo "You found a gold coin!\n";
      array_push($inventory, "gold coin");
    } else if ($choice == "2") {
      $location = "forest";
    } else if ($choice == "3") {
      echo "Inventory: " . implode(", ", $inventory) . "\n";
    }
  }
}

?>
