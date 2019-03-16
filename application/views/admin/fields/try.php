<div class="pmf-container" style="margin-left:auto; margin-right:auto; margin-top:30px; max-width:1170px;  ">
    <div class="row" style="margin-left:30px; margin-right:30px;">
        <div id="app"> <pre>
        {{todos}}
     </pre>
            <button @click="someFunc">test</button>
            <div class="m-list" v-for="todo in todos">
                <div v-for="x in todo.length">
                    <div v-if="todo[x-1].type=='plain-text'">
                        <input v-model="todo[x-1].value" type="text" name="" id="" value="" /> </div>
                    <div v-if="todo[x-1].type=='multi-line'">
                        <textarea v-model="todo[x-1].value" name="" rows="4"></textarea>
                    </div>
                    <div v-if="todo[x-1].type=='rich-text'">
                        <textarea v-model="todo[x-1].value" name="" rows="4"></textarea>
                    </div>
                    <div v-if="todo[x-1].type=='drop-down'">
                        <select name="" id="" v-model="todo[x-1].value">
                            <option v-for="y in todo[x-1].variations.length" :value="todo[x-1].variations[y-1]"> {{todo[x-1].variations[y-1]}} </option>
                        </select>
                    </div>
                    <!-- still needs debugging -->
                    <div v-if="todo[x-1].type=='check-box'">
                        <div v-for="y in todo[x-1].variations.length">
                            <label>
                                <input v-model="todo[x-1].value" type="checkbox" :id="todo[x-1].variations[y-1]" :value="todo[x-1].variations[y-1]" />{{todo[x-1].variations[y-1]}}
                             </label>
                        </div>
                    </div>
                    <div v-if="todo[x-1].type=='color'">
                        <input v-model="todo[x-1].value" type="text" name="" id="" value="" /> 
                    </div>

                    <div v-if="todo[x-1].type=='date'">
                        <div class='form-group'>
                            <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="" data-toggle="tooltip" data-placement="right" title="" data-date-format="dd-mm-yyyy" name="name" data-original-title="">
                        </div>
                        
                    </div>
                </div>
                <div class="m-del" @click="deleteItem(todo)">x</div>
            </div>
        </div>
    </div>