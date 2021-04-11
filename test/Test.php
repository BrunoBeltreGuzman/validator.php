<?php

function test($result, $expected)
{
       if ($result == $expected) {
              echo "
               <br>
              <span style='font-size:100px;'>&#128526;</span>
               <h1>Result: " . $result . " </h1>
               <h3>Expected: " . $expected . " </h3>
               <p>Test Passed!!</p>
              <br>
              ";
       } else {
              echo "
               <br>
              <span style='font-size:100px;'>&#128533;</span>
               <h1>Result: " . $result . " </h1>
              <h3>Expected: " . $expected . " </h3>
               <p>Test <b>NO</b> Passed!!</p>
              <br>
              ";
       }
}


function test1($result)
{
       if ($result == true) {
              echo "
               <br>
              <span style='font-size:100px;'>&#128526;</span>
               <h1>Result: " . $result . " </h1>
               <p>Test Passed!!</p>
              <br>
              ";
       } else {
              echo "
               <br>
              <span style='font-size:100px;'>&#128533;</span>
               <h1>Result: " . $result . " </h1>
               <p>Test <b>NO</b> Passed!!</p>
              <br>
              ";
       }
}

function test2($result, $expected)
{
       if ($result == $expected) {
              echo "
               <br>
              <span style='font-size:100px;'>&#128526;</span>
               <h1>Result: " . $result . " </h1>
               <h3>Expected: " . $expected . " </h3>
               <p>Test Passed!!</p>
              <br>
              ";
       } else {
              echo "
               <br>
              <span style='font-size:100px;'>&#128533;</span>
               <h1>Result: " . $result . " </h1>
              <h3>Expected: " . $expected . " </h3>
               <p>Test <b>NO</b> Passed!!</p>
              <br>
              ";
       }
}
