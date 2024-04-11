<?php ?>
<html>
<!-- allows for enable and disable of functions -->
<form action="" method="get">
    <div class="sidenavleft">
        <section class="margin">
            <h1>duplicates:</h1>
            <label class="switch">
                <input type="checkbox" name=D <?php echo (!isset($switchDuplicates)) ?  "" : 'checked=checked' ?> />

                <span class="slider round"></span>
            </label>
        </section>
        <section class="margin">
            <h1>parlinedrome:</h1>
            <label class="switch">
                <input type="checkbox" name=pd <?php echo (!isset($switchParlinedrome)) ?  "" : 'checked=checked' ?> />
                <span class="slider round"></span>
            </label>
        </section>
        <section class="margin">
            <h1>Word Count:</h1>
            <label class="switch">
                <input type="checkbox" name=wc <?php echo (!isset($switchWordCount)) ?  "" : 'checked=checked' ?> />
                <span class="slider round"></span>
            </label>
        </section>
        <section class="margin">
            <h1>calculator:</h1>
            <label class="switch">
                <input type="checkbox" name=cal <?php echo (!isset($switchCalc)) ?  "" : 'checked=checked' ?> />
                <span class="slider round"></span>
            </label>
        </section>
        <input type="submit" value="apply options">
    </div>
</form>

</html>