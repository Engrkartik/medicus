<div class="form-group label-floating">
    <label class="control-label" for="focusedInput1">Write something to make the label float</label>
    <input class="form-control" id="focusedInput1" type="text">
</div>

<div class="form-group label-floating">
    <label class="control-label" for="focusedInput2">Focus to show the help-block</label>
    <input class="form-control" id="focusedInput2" type="text">
    <p class="help-block">You should really write something here</p>
</div>

<div class="form-group">
    <label class="control-label" for="disabledInput">Disabled input</label>
    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
</div>

<div class="form-group has-warning">
    <label class="control-label" for="inputWarning">Input warning</label>
    <input type="text" class="form-control" id="inputWarning">
</div>

<div class="form-group has-error">
    <label class="control-label" for="inputError">Input error</label>
    <input type="text" class="form-control" id="inputError">
</div>

<div class="form-group has-success">
    <label class="control-label" for="inputSuccess">Input success</label>
    <input type="text" class="form-control" id="inputSuccess">
</div>

<div class="form-group">
    <label class="control-label" for="inputLarge">Large input</label>
    <input class="form-control input-lg" type="text" id="inputLarge">
</div>

<div class="form-group">
    <label class="control-label" for="inputDefault">Default input</label>
    <input type="text" class="form-control" id="inputDefault">
</div>

<div class="form-group">
    <label class="control-label" for="inputSmall">Small input</label>
    <input class="form-control input-sm" type="text" id="inputSmall">
</div>

<div class="form-group">
    <label class="control-label" for="addon1">Default label w/input addons</label>
    <div class="input-group">
        <span class="input-group-addon">$</span>
        <input type="text" id="addon1" class="form-control">
    <span class="input-group-btn">
        <button class="btn btn-primary" type="button">Button</button>
    </span>
    </div>
</div>

<div class="form-group label-floating">
    <div class="input-group">
        <span class="input-group-addon">$</span>
        <label class="control-label" for="addon3a">Floating label w/2 addons</label>
        <input type="text" id="addon3a" class="form-control">
        <p class="help-block">The label is inside the <code>input-group</code> so that it is positioned properly as a placeholder.</p>
    <span class="input-group-btn">
      <button type="button" class="btn btn-fab btn-fab-mini">
        <i class="material-icons">send</i>
      </button>
    </span>
    </div>
</div>

<div class="form-group label-floating">

    <label class="control-label" for="addon2">Floating label w/right addon</label>
    <div class="input-group">
        <input type="text" id="addon2" class="form-control">
    <span class="input-group-btn">
      <button type="button" class="btn btn-fab btn-fab-mini">
        <i class="material-icons">functions</i>
      </button>
    </span>
    </div>
</div>

<div class="form-group">
    <input type="file" id="inputFile4" multiple="">
    <div class="input-group">
        <input type="text" readonly="" class="form-control" placeholder="Placeholder w/file chooser...">
      <span class="input-group-btn input-group-sm">
        <button type="button" class="btn btn-fab btn-fab-mini">
          <i class="material-icons">attach_file</i>
        </button>
      </span>
    </div>
</div>