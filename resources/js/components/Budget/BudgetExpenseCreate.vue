<template>
    <form class="flex flex-col w-1/2 space-y-4" @submit.prevent="submit">
        <!-- category field -->
        <div class="flex flex-col">
            <label for="category">Category</label>
            <select
                id="category"
                class="appearance-none rounded-none p-4 bg-white shadow focus:outline-none focus:shadow-outline"
            >
                <option value="#">Woolworths</option>
            </select>
        </div>
        <!-- Amount field -->
        <div class="flex flex-col">
            <label for="amount">Amount</label>
            <div class="flex flex-row">
                <div
                    class="w-1/6 bg-white shadow flex flex-row items-center justify-center"
                >
                    <svg
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        class="w-8 h-8"
                    >
                        <path
                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
                        ></path>
                    </svg>
                </div>
                <input
                    v-model="form.amount"
                    type="text"
                    id="amount"
                    class="w-5/6 p-4 bg-white shadow focus:outline-none focus:shadow-outline"
                    autocomplete="off"
                />
            </div>
        </div>

        <!-- Date field -->
        <div class="flex flex-col">
            <label for="#">Date - {{ formatDate() }}</label>
            <div
                class="flex flex-row grid grid-cols-7 text-center text-xs bg-white shadow p-4 cursor-default"
            >
                <!-- chage year -->
                <div
                    class="col-span-1 py-4 cursor-pointer"
                    @click="decreaseYear()"
                >
                    &lt;
                </div>
                <div class="col-span-1 py-4">
                    {{ selectedYear }}
                </div>
                <div
                    class="col-span-1 py-4 cursor-pointer"
                    @click="increaseYear"
                >
                    &gt;
                </div>
                <div class="col-span-1"></div>
                <!-- change day -->
                <div
                    class="col-span-1 py-4 cursor-pointer"
                    @click="decreaseMonth()"
                >
                    &lt;
                </div>
                <div class="col-span-1 py-4">
                    {{ months[selectedMonth] }}
                </div>
                <div
                    class="col-span-1 py-4 cursor-pointer"
                    @click="increaseMonth"
                >
                    &gt;
                </div>

                <!-- days -->
                <div class="py-4" v-for="day in days" v-bind:key="day">
                    {{ day }}
                </div>
                <div
                    class="cursor-pointer"
                    v-for="day in monthTotalDay() + monthFirstDay()"
                    v-bind:key="day.id"
                >
                    <div v-if="day <= monthFirstDay()"></div>
                    <div
                        class="p-4 bg-gray-800 text-white"
                        v-else-if="day === selectedDay + monthFirstDay()"
                    >
                        {{ day - monthFirstDay() }}
                    </div>
                    <div
                        class="p-4"
                        v-else
                        @click="selectDay(day - monthFirstDay())"
                    >
                        {{ day - monthFirstDay() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- note field -->
        <div class="flex flex-col">
            <label for="note">Note</label>
            <textarea
                id="note"
                v-model="form.note"
                class="p-4 h-32 bg-white shadow focus:outline-none focus:shadow-outline resize-none"
            >
            </textarea>
        </div>
        <!-- submit field -->
        <button
            type="submit"
            class="p-4 bg-white shadow focus:outline-none focus:shadow-outline"
        >
            Create
        </button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            errors: null,
            form: {
                amount: null,
                date: null,
                note: null
            },
            selectedMonth: new Date().getMonth(),
            selectedDay: new Date().getDate(),
            selectedYear: new Date().getFullYear(),
            days: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            months: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
            ]
        };
    },
    methods: {
        monthFirstDay: function() {
            return new Date(this.selectedYear, this.selectedMonth, 1).getDay();
        },
        monthTotalDay: function() {
            return new Date(
                this.selectedYear,
                this.selectedMonth + 1,
                0
            ).getDate();
        },
        selectDay: function(day) {
            this.selectedDay = day;
        },
        formatDate: function() {
            return (
                this.selectedDay +
                " " +
                this.months[this.selectedMonth] +
                " " +
                this.selectedYear
            );
        },
        increaseMonth: function() {
            if (this.selectedMonth === 11) {
                this.selectedMonth = 0;
                this.selectedYear += 1;
            } else {
                this.selectedMonth += 1;
            }
        },
        decreaseMonth: function() {
            if (this.selectedMonth === 0) {
                this.selectedMonth = 11;
                this.selectedYear -= 1;
            } else {
                this.selectedMonth -= 1;
            }
        },
        increaseYear: function() {
            this.selectedYear += 1;
        },
        decreaseYear: function() {
            this.selectedYear -= 1;
        },
        submit: function() {
            this.form.date =
                this.selectedYear +
                "-" +
                this.selectedMonth +
                "-" +
                this.selectedDay;

            axios
                .post("/budget/expenses", this.form)
                .then(res => {
                    if (res.status === 200) {
                        this.form.amount = null;
                        this.form.note = null;
                    }
                })
                .catch(err => {
                    console.log(err);
                });
        }
    }
};
</script>