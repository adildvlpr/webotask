<div>

  <div class="col-md-6" id="screen1">
    <div class="container">
        <h3>Result</h3>
        <p>
        {{$number1}}    {{$operator}} {{$number2}} 
        @if($result)
        =
        {{$result}}
        @endif
        </p>
        <br>

        @if (count($errors) > 0)       
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      @endif
      <br>
    
        <form class="form-inline"  wire:submit.prevent="getresult">
        <div class="form-group">
            <input type="number" class="form-control" autocomplete="" wire:model="number1" >
            <br>
          </div>

          <div class="form-group">
            <select wire:model="operator" class="form-control">
            <option value="">select operator</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            </select>
          </div>

          <div class="form-group">
            <input type="number" class="form-control" wire:model="number2">
          </div>

          <button type="submit" class="btn btn-info">=</button>
         
         
        </form>
        <br><br>
        <button wire:click="saveresult" class="btn btn-danger">Save result</button>

        <br><br>
        <button wire:click="resetall" class="btn btn-primary">Reset</button>
        <br>
        <br>
      </div>
   
      </div>

      {{-- Second screen for history --}}



      <div class="col-md-4" id="screen2">
        <table class="table">
          <tr>
          <td>Sno</td>
          <td>History</td>
          <td>Action</td>
        </tr>
        @forelse ($history as $alltimes=>$historyresult)
        <tr>
          <td>{{$alltimes+1}}</td>
          <td><?php $before = json_decode($historyresult->history,true);
              $numbers = $before['numbers'];
              $finalresult = $before['result'];
              echo $numbers.$finalresult;
          ?>
            
          </td>
          <td><a wire:click="deleteresult({{$historyresult->id}})" style="cursor: pointer">Delete</a></td>
        </tr>

          @empty
          <tr>
            <td colspan="2">No history</td>
          </tr>

        @endforelse
        </table>
      </div>


</div>
