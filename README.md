# Debugging test case on a specific data set

Using PHPStorm 2023.2

## PHPUnit 9.6

- Open the project in `PHPUnit_9` sub-directory

- Right-click the icon against `testDummy` method and click `Run 'testDummy'`

<p align="center">
  <img src="https://github.com/SergeyKleyman/PHPStorm_PHPUnit_debug_specific_data_set/assets/7782093/2c16ab89-c999-4fa7-98eb-ea0481a45349"/>
</p>

- Set breakpoint on the line with `self::assertNotSame(4, $counter);` in `testDummy` method

- In `Test Results` frame right-click tree node with `with data set #3` and click `Debug 'testDummy (PHPUnit)'` in the pop-up menu

<p align="center">
  <img src="https://github.com/SergeyKleyman/PHPStorm_PHPUnit_debug_specific_data_set/assets/7782093/f22f2cd3-8886-4c39-b182-a1fbf1e4d2f2"/>
</p>

- Breaking on the breakpoint on the line with `self::assertNotSame(4, $counter);` should have `$counter` as `4`

<p align="center">
  <img src="https://github.com/SergeyKleyman/PHPStorm_PHPUnit_debug_specific_data_set/assets/7782093/8095bee6-4b83-448d-a750-81cfb4ce4f27"/>
</p>

- Stopping the test shows that command line was has `--filter "/DebugTestDataSetTests\\DataSetsTest::testDummy with data set #3$/"`

## PHPUnit 10.3

- Open the project in `PHPUnit_10` sub-directory

- Execute the same steps as above

- Breaking on the breakpoint on the line with `self::assertNotSame(4, $counter);` has `$counter` as `1` and not `4` as expected because it seems PHPStorm executes the test with the first data set and not the selected `data set #3`

<p align="center">
  <img src="https://github.com/SergeyKleyman/PHPStorm_PHPUnit_debug_specific_data_set/assets/7782093/39be55d9-a572-4ca0-be9b-e4c4af5c9060"/>
</p>

- Stopping the test shows that command line was has `--filter "/(DebugTestDataSetTests\\DataSetsTest::testDummy)( .*)?$/"` and not referencing `data set #3` at all
