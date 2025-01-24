import './bootstrap';

const addGoalButton = document.getElementById('add-goal');
const showGoalDiv = document.getElementById('showGoal');
const goalInput = document.getElementById('goal');
const GoalArray = [];
const showGoals = document.getElementById('showGoals');
addGoalButton.addEventListener('click', function() {
    const goalValue = goalInput.value;
    GoalArray.push(goalValue);
    const p = document.createElement('p');
    p.textContent = goalValue;
    showGoal.appendChild(p);
    goalInput.value = '';
});
