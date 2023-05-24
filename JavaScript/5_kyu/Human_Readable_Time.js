function humanReadable(seconds) {
  var hours = Math.floor(seconds / 3600);
  seconds -= hours * 3600;

  var minutes = Math.floor(seconds / 60);
  seconds -= minutes * 60;

  hours = hours.toString().padStart(2, "0");
  minutes = minutes.toString().padStart(2, "0");
  seconds = seconds.toString().padStart(2, "0");

  return `${hours}:${minutes}:${seconds}`;
}

humanReadable(0); //, '00:00:00', 'humanReadable(0)');
humanReadable(59); //, '00:00:59', 'humanReadable(59)');
humanReadable(60); //, '00:01:00', 'humanReadable(60)');
humanReadable(90); //, '00:01:30', 'humanReadable(90)');
humanReadable(3599); //, '00:59:59', 'humanReadable(3599)');
humanReadable(3600); //, '01:00:00', 'humanReadable(3600)');
humanReadable(45296); //, '12:34:56', 'humanReadable(45296)');
humanReadable(86399); //, '23:59:59', 'humanReadable(86399)');
