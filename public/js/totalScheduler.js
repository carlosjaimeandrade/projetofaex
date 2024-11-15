const totalSchedulerElment = document.querySelector('.total-scheduler')

async function totalScheduler() {
    let total = await fetch('/api/schedulers')
    total = await total.json()
    totalSchedulerElment.innerHTML = total.total_schedulers
}

totalScheduler()