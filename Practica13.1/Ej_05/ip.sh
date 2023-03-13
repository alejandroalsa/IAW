#!/bin/bash

clear

set -x

export AWS_PAGER=""

aws ec2 describe-instances \
    --filters "Name=instance-state-name,Values=running" \
    --query "Reservations[*].Instances[*].[Tags[*].Value, PublicIpAddress]" \
    --output yaml