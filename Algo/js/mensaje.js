 setTimeout(function () {
            var alert = document.getElementById('show');
            if (alert) {
                var bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
                bsAlert.close();
            }
        }, 1000);
