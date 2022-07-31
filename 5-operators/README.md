# Comparison Operators

<table style="width: 100%">
  <tbody>
  <tr>
    <th>Operator</th>
    <th>Name</th>
    <th>Example</th>
  </tr>
  <tr>
    <td>==</td>
    <td>เท่ากับ</td>
    <td>$a == $b</td>
  </tr>
  <tr>
    <td>===</td>
    <td>เท่ากับ (เช็ค type)</td>
    <td>$a === $b</td>
  </tr>
  <tr>
    <td>!=</td>
    <td>ไม่เท่ากับ</td>
    <td>$a != $b</td>
  </tr>
  <tr>
    <td><></td>
    <td>ไม่เท่ากับ</td>
    <td>$a <> $b</td>
  </tr>
  <tr>
    <td>!==</td>
    <td>ไม่เท่ากับ (เช็ค type)</td>
    <td>$a !== $b</td>
  </tr>
  <tr>
    <td>></td>
    <td>มากกว่า</td>
    <td>$a > $b</td>
  </tr>
  <tr>
    <td><</td>
    <td>น้อยกว่า</td>
    <td>$a < $b</td>
  </tr>
  <tr>
    <td>>=</td>
    <td>มากกว่าหรือเท่ากับ</td>
    <td>$a >= $b</td>
  </tr>
  <tr>
    <td><=</td>
    <td>น้อยกว่าหรือเท่ากับ</td>
    <td>$a <= $b</td>
  </tr>
  <tr>
    <td><=></td>
    <td>Spaceship</td>
    <td>$a <=> $b</td>
  </tr>
  </tbody>
</table>

> ใน Array `===` และ `!==` จะเช็ค `key/value` `order` `type`

> Spaceship Operator `<=>`
>
> - ค่าจะเป็น 0 เมื่อ $a เท่ากับ $b
> - ค่าจะเป็น 1 เมื่อ $a มากกว่า $b
> - ค่าจะเป็น -1 เมื่อ $a น้อยกว่า $b

<br><br>

# Logical Operators

<table style="width: 100%">
    <tbody>
      <tr>
        <th>Operator</th>
        <th>Name</th>
        <th>Example</th>
      </tr>
      <tr>
        <td>and</td>
        <td>และ</td>
        <td>$a and $b</td>
      </tr>
      <tr>
        <td>or</td>
        <td>หรือ</td>
        <td>$a or $b</td>
      </tr>
      <tr>
        <td>xor</td>
        <td>Exclusive Or</td>
        <td>$a xor $b</td>
      </tr>
      <tr>
        <td>&amp;&amp;</td>
        <td>และ</td>
        <td>$a &amp;&amp; $b</td>
      </tr>
      <tr>
        <td>||</td>
        <td>หรือ</td>
        <td>$a || $b</td>
      </tr>
      <tr>
        <td>!</td>
        <td>ไม่</td>
        <td>!$a</td>
      </tr>
  </tbody>
</table>

<br><br>

# Conditional Assignment Operators

<table style="width: 100%">
    <tbody>
      <tr>
        <th>Operator</th>
        <th>Name</th>
        <th>Example</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>a ? b : c</td>
        <td>Ternary</td>
        <td>$x = $a ? $b : $c</td>
        <td>
          $x เป็น $ฟ เมื่อ $a เป็น true <br>
           $x เป็น $c เมื่อ $a เป็น false
        </td>
      </tr>
      <tr>
        <td>??</td>
        <td>Null coalescing</td>
        <td>$x = $a ?? $b</td>
        <td>
          $x เป็น $a เมื่อ $a มีค่าและไม่เป็น NULL<br>
          $x เป็น $c เมื่อ $a มีไม่มีค่าหรือเป็น NULL
        </td>
      </tr>
  </tbody>
</table>
