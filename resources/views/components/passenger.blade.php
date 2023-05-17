@props(['passenger'])
<div class="searchMenu-guests px-30 lg:py-20 lg:px-0 js-form-dd js-form-counters">

    <div data-x-dd-click="searchMenu-guests">
        <h4 class="text-15 fw-500 ls-2 lh-16">Passenger</h4>

        <div class="text-15 text-light-1 ls-2 lh-16">
            <input type="number" id="adults-input" min="0" placeholder="1" name="adults" />
            -
            <input type="number" placeholder="2" min="0" id="children-input" name="children" />
            -
            <select id="travel-class-select" name="class">
                <option value="ECONOMY">Economy</option>
                <option value="PREMIUM_ECONOMY">Premium Economy</option>
                <option value="BUSINESS">Business</option>
                <option value="FIRST">First</option>
            </select>
        </div>
    </div>


</div>